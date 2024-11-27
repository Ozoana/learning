package com.example.daus;

import android.content.ContentValues;
import android.content.Context;
import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.database.sqlite.SQLiteOpenHelper;

public class koneksi extends SQLiteOpenHelper {
    private static final String DATABASE_NAME = "planner.db";
    private static final int DATABASE_VERSION = 2; // Tingkatkan versi database

    // Nama tabel dan kolom
    private static final String TABLE_NAME = "jadwal";
    private static final String COLUMN_KEGIATAN = "kegiatan";
    private static final String COLUMN_WAKTU = "waktu"; // Waktu sekarang menjadi primary key
    private static final String COLUMN_TANGGAL = "tanggal";
    private static final String COLUMN_DESKRIPSI = "deskripsi"; // Tetap mempertahankan kolom deskripsi

    public koneksi(Context context) {
        super(context, DATABASE_NAME, null, DATABASE_VERSION);
    }

    @Override
    public void onCreate(SQLiteDatabase db) {
        // Membuat tabel dengan 'waktu' sebagai primary key, dan 'deskripsi' tetap ada
        String CREATE_TABLE = "CREATE TABLE " + TABLE_NAME + "("
                + COLUMN_WAKTU + " TEXT PRIMARY KEY, " // Waktu jadi primary key
                + COLUMN_KEGIATAN + " TEXT, "
                + COLUMN_TANGGAL + " TEXT, "
                + COLUMN_DESKRIPSI + " TEXT)"; // Kolom deskripsi tetap ada
        db.execSQL(CREATE_TABLE);
    }

    @Override
    public void onUpgrade(SQLiteDatabase db, int oldVersion, int newVersion) {
        if (oldVersion < newVersion) {
            // Hapus tabel lama dan buat tabel baru dengan struktur yang sudah diubah
            db.execSQL("DROP TABLE IF EXISTS " + TABLE_NAME);
            onCreate(db);
        }
    }

    // Fungsi untuk menyimpan data
    public boolean insertData(String kegiatan, String waktu, String tanggal, String deskripsi) {
        SQLiteDatabase db = this.getWritableDatabase();
        ContentValues values = new ContentValues();
        values.put(COLUMN_KEGIATAN, kegiatan);
        values.put(COLUMN_WAKTU, waktu); // Waktu sebagai primary key
        values.put(COLUMN_TANGGAL, tanggal);
        values.put(COLUMN_DESKRIPSI, deskripsi); // Kolom deskripsi tetap ada

        long result = db.insert(TABLE_NAME, null, values);
        return result != -1; // Return true jika berhasil
    }

    // Ambil data semua jadwal
    public Cursor getAllData() {
        SQLiteDatabase db = this.getReadableDatabase();
        return db.rawQuery("SELECT * FROM " + TABLE_NAME, null);
    }

    // Menghapus data berdasarkan waktu (sekarang primary key)
    public boolean deleteData(String waktu) {
        SQLiteDatabase db = this.getWritableDatabase();
        // Hapus data berdasarkan waktu
        return db.delete(TABLE_NAME, COLUMN_WAKTU + "=?", new String[]{waktu}) > 0;
    }
}
