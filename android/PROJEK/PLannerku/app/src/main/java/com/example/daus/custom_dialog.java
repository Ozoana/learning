package com.example.daus;

import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.content.ContextCompat;

public class custom_dialog extends AppCompatActivity {

    // Deklarasi variabel untuk elemen-elemen di dialog
    private TextView dialogKegiatan, dialogDeskripsi, dialogTanggal, dialogWaktu;
    private Button dialogHapusButton;

    // Variabel untuk menyimpan data yang diteruskan dari MainActivity
    private String kegiatan, deskripsi, tanggal, waktu;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_custom_dialog);

        Window window = getWindow();
        window.setNavigationBarColor(ContextCompat.getColor(this, R.color.biruUT));
        window.setStatusBarColor(ContextCompat.getColor(this, R.color.biruUT));

        // Inisialisasi elemen-elemen dari layout
        dialogKegiatan = findViewById(R.id.dialogKegiatan);
        dialogDeskripsi = findViewById(R.id.dialogDeskripsi);
        dialogTanggal = findViewById(R.id.dialogTanggal);
        dialogWaktu = findViewById(R.id.dialogWaktu);
        dialogHapusButton = findViewById(R.id.dialogHapusButton);

        // Mendapatkan data yang dikirim dari MainActivity melalui intent
        if (getIntent() != null) {
            kegiatan = getIntent().getStringExtra("kegiatan");
            deskripsi = getIntent().getStringExtra("deskripsi");
            tanggal = getIntent().getStringExtra("tanggal");
            waktu = getIntent().getStringExtra("waktu");

            // Menampilkan data ke dalam dialog
            dialogKegiatan.setText(kegiatan);
            dialogDeskripsi.setText(deskripsi);
            dialogTanggal.setText(tanggal);
            dialogWaktu.setText(waktu);
        }

        // Menambahkan listener pada tombol hapus
        dialogHapusButton.setOnClickListener(v -> {
            // Menghapus data dari database berdasarkan waktu
            koneksi dbHelper = new koneksi(custom_dialog.this);
            boolean isDeleted = dbHelper.deleteData(waktu); // Hapus berdasarkan primary key (waktu)
            if (isDeleted) {
                Toast.makeText(custom_dialog.this, "Data berhasil dihapus.", Toast.LENGTH_SHORT).show();
                finish(); // Tutup dialog setelah penghapusan berhasil
            } else {
                Toast.makeText(custom_dialog.this, "Gagal menghapus data.", Toast.LENGTH_SHORT).show();
            }
        });
    }
    public void btn_kembali(View v) {
        finish();
    }
}
