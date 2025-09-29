<?php
//foreach ini adalah perulangan tapi menggunakan data array
// jadi ini adalah perulangan khusus untuk array, baik array biasa atau array asosiatif (map).
// dan foreach akan otomatis mengambil elemen dari array, satu per satu

// contoh nya yang menggunkan array
$buah = ["apel", "jeruk", "mangga"];

foreach ($buah as $item) {
    echo "Buah: $item\n";
}
//penjelasan nya Ambil setiap nilai dari array $buah, simpan ke $item, lalu jalankan blok {}

// contoh menggunakan map 
$profil = [
    "nama" => "Ahmad",
    "umur" => 20,
    "hobi" => "Coding"
];

foreach ($profil as $kunci => $nilai) {
    echo "$kunci: $nilai\n";
}

// kode yang as $kunci => $nilai
//  itu artinya Ambil setiap pasang key dan value dari array
