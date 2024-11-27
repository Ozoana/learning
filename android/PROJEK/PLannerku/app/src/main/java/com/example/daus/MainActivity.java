package com.example.daus;

import android.content.Intent;
import android.database.Cursor;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.widget.AdapterView;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.content.ContextCompat;

import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class MainActivity extends AppCompatActivity {

    koneksi dbHelper;
    ListView listView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        // Atur warna status bar dan navigation bar
        Window window = getWindow();
        window.setNavigationBarColor(ContextCompat.getColor(this, R.color.biruUT));
        window.setStatusBarColor(ContextCompat.getColor(this, R.color.biruUT));

        // Inisialisasi database dan ListView
        dbHelper = new koneksi(this);
        listView = findViewById(R.id.list_item_view);

        // Muat data ke ListView
        loadDataToListView();

        // Menambahkan onItemClickListener untuk ListView
        listView.setOnItemClickListener(new AdapterView.OnItemClickListener() {
            @Override
            public void onItemClick(AdapterView<?> parent, View view, int position, long id) {
                // Ambil data dari item yang dipilih
                Map<String, String> selectedItem = (Map<String, String>) parent.getItemAtPosition(position);
                showDialog(selectedItem); // Tampilkan dialog
            }
        });
    }

    @Override
    protected void onResume() {
        super.onResume();
        // Selalu panggil loadDataToListView untuk memuat data terbaru saat aktivitas aktif kembali
        loadDataToListView();
    }

    private void loadDataToListView() {
        Cursor cursor = dbHelper.getAllData();
        if (cursor.getCount() == 0) {
            Toast.makeText(this, "Tidak ada data untuk ditampilkan.", Toast.LENGTH_SHORT).show();
            return;
        }

        // Simpan data dari cursor ke dalam List<Map<String, String>>
        List<Map<String, String>> dataList = new ArrayList<>();
        while (cursor.moveToNext()) {
            Map<String, String> data = new HashMap<>();
            data.put("kegiatan", cursor.getString(cursor.getColumnIndexOrThrow("kegiatan")));
            data.put("waktu", cursor.getString(cursor.getColumnIndexOrThrow("waktu")));
            data.put("tanggal", cursor.getString(cursor.getColumnIndexOrThrow("tanggal")));
            data.put("deskripsi", cursor.getString(cursor.getColumnIndexOrThrow("deskripsi"))); // Tambahkan deskripsi
            dataList.add(data);
        }
        cursor.close();

        // Gunakan SimpleAdapter untuk menampilkan data di ListView
        SimpleAdapter adapter = new SimpleAdapter(
                this,
                dataList,
                R.layout.itemlss, // Layout untuk setiap item ListView
                new String[]{"kegiatan", "waktu", "tanggal"}, // Key dari Map
                new int[]{R.id.adapter_kegiatan_ls, R.id.adapter_waktu_ls, R.id.adapter_tanggal_ls} // ID TextView di layout itemlss
        );

        // Set adapter ke ListView
        listView.setAdapter(adapter);
    }

    // Method untuk menambah jadwal baru
    public void jadwal_baru(View v) {
        Intent intent = new Intent(this, InputActivity.class);
        startActivity(intent);
        overridePendingTransition(R.anim.slide_in_right, R.anim.slide_out_lef);
    }

    // Method untuk menampilkan informasi developer
    public void btNinfo(View v) {
        String url = "https://www.instagram.com/a.firdaus_____/";
        Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse(url));
        startActivity(intent);
        Toast.makeText(this, "Tentang Developer", Toast.LENGTH_SHORT).show();
    }

    // Method untuk menangani item yang dipilih di ListView dan menampilkan dialog
    private void showDialog(Map<String, String> selectedItem) {
        // Mengambil data dari item yang dipilih
        String kegiatan = selectedItem.get("kegiatan");
        String deskripsi = selectedItem.get("deskripsi");
        String tanggal = selectedItem.get("tanggal");
        String waktu = selectedItem.get("waktu");

        // Mengirim data ke custom_dialog melalui Intent
        Intent intent = new Intent(this, custom_dialog.class);
        intent.putExtra("kegiatan", kegiatan);
        intent.putExtra("deskripsi", deskripsi);
        intent.putExtra("tanggal", tanggal);
        intent.putExtra("waktu", waktu);

        // Memulai activity custom_dialog
        startActivity(intent);
    }
}
