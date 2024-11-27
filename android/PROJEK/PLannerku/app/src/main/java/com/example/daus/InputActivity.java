package com.example.daus;

import android.app.DatePickerDialog;
import android.app.TimePickerDialog;
import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;

import java.text.DecimalFormat;
import java.text.NumberFormat;
import java.util.Calendar;

public class InputActivity extends AppCompatActivity {

    koneksi dbHelper; // Deklarasi global

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this); // Pastikan ini ada!
        setContentView(R.layout.activity_inputkl);
        // Inisialisasi database helper
        dbHelper = new koneksi(this);

        // Ambil referensi EditText
        EditText inputKegiatan = findViewById(R.id.input_kgt);
        EditText inputWaktu = findViewById(R.id.input_wtk);
        EditText inputTanggal = findViewById(R.id.input_tgl);
        EditText inputDeskripsi = findViewById(R.id.input_dsk);
        Button btnSimpan = findViewById(R.id.btnSimpan);

        addDatePicker(inputTanggal);

        // Tambahkan TimePicker ke inputWaktu
        addTimePicker(inputWaktu);

        // Listener untuk tombol simpan
        btnSimpan.setOnClickListener(view -> {
            String kegiatan = inputKegiatan.getText().toString().trim();
            String waktu = inputWaktu.getText().toString().trim();
            String tanggal = inputTanggal.getText().toString().trim();
            String deskripsi = inputDeskripsi.getText().toString().trim();

            // Validasi input kosong
            if (kegiatan.isEmpty() || waktu.isEmpty() || tanggal.isEmpty() || deskripsi.isEmpty()) {
                Toast.makeText(this, "Harap isi semua kolom!", Toast.LENGTH_SHORT).show();
                return;
            }

            // Simpan data ke database
            boolean isInserted = dbHelper.insertData(kegiatan, waktu, tanggal, deskripsi);
            if (isInserted) {
                Toast.makeText(this, "Data berhasil disimpan", Toast.LENGTH_SHORT).show();

                // Jika ingin kembali ke halaman utama setelah menyimpan 1 data
                Intent intent = new Intent(InputActivity.this, MainActivity.class);
                intent.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP | Intent.FLAG_ACTIVITY_NEW_TASK);
                overridePendingTransition(R.anim.slide_in_left, R.anim.slide_out_right);
                startActivity(intent);
                finish();
            } else {
                Toast.makeText(this, "Data gagal disimpan. Waktu tidak munkin sama!", Toast.LENGTH_SHORT).show();
            }
        });
    }

    private void addDatePicker(EditText inputTanggal) {
        // Inisialisasi Calendar
        Calendar calendar = Calendar.getInstance();
        NumberFormat formatter = new DecimalFormat("00");

        inputTanggal.setOnClickListener(v -> {
            DatePickerDialog datePickerDialog = new DatePickerDialog(this,
                    (view, year, month, dayOfMonth) -> {
                        String formattedDate = year + "-" + formatter.format(month + 1) + "-" + formatter.format(dayOfMonth);
                        inputTanggal.setText(formattedDate);
                    },
                    calendar.get(Calendar.YEAR),
                    calendar.get(Calendar.MONTH),
                    calendar.get(Calendar.DAY_OF_MONTH));
            datePickerDialog.show();
        });
    }

    private void addTimePicker(EditText inputWaktu) {
        // Inisialisasi Calendar
        Calendar calendar = Calendar.getInstance();

        inputWaktu.setOnClickListener(v -> {
            int hour = calendar.get(Calendar.HOUR_OF_DAY);
            int minute = calendar.get(Calendar.MINUTE);

            TimePickerDialog timePickerDialog = new TimePickerDialog(this,
                    (view, hourOfDay, minuteOfHour) -> {
                        String formattedTime = String.format("%02d:%02d", hourOfDay, minuteOfHour);
                        inputWaktu.setText(formattedTime);
                    },
                    hour,
                    minute,
                    true); // true untuk format 24 jam
            timePickerDialog.show();
        });
    }

    public void btn_bck(View v) {
        finish();
    }
}
