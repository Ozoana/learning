<?php

//tipe data array, array adalah tipe data yang berisikan banyak data sekaligus/kosong
//kira bisa memasukan tipe data yang berbeda di dalam array php, kita bisa memasukan string, null atau number
//array juga memiliki panjang dinamis, artinya tidak  terbatas
// membuat array ada dua cara

//cara pertama
$nama = array ("ahmad", "pir", "daus",);
var_dump($nama);

echo "\n";
//nanti akan muncul array (berapa isi array kita) {
// [0] => string "ahmad"
// [1] => string "pir"
// [2] => string "daus"
// }
// di array, 0 itu di hitung 1, karena array mulai menghitung dari 0, itu sebabnya 0 itu jadi 1. dan isi array itu punya nama lain, ya itu index
//jadi 0 itu index ke 1 dan seterus nya
//index juga membantu kita untuk mengakses data, entah itu mengubah data nya, atau menghapus atau juga menambahkan data
//jadi indek itu seperti membantu memilih yang mana yang ingin di ubah. 
// contoh nya var_dump sesuai index 

var_dump ($nama[1]);
echo "\n";

//cara kedua
$NAMA = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1, 0.5, null];
var_dump ($NAMA);

echo "\n";
//itu adalah cara membuat array yang langsung, bagaimana jika kita ingin menambahkan, menghapus atau mengubah data di dalam array :

$siswa = ['daus', 'aspian', 'fadil', 'ihsan', 'ali', 'ikmal','rafei'];
var_dump ($siswa);

// $nama array[index] = value -> ini untuk mengubah data di array pada nomor index dengan value baru
$siswa[6] = "yoga";
var_dump ($siswa);

// $nama array [] = value -> ini untuk menambahkan data di array pada posisi paling belakang, kenapa paling belakang? 
// karean index nya di situ tidak ada di situ, jadi dia membuat index baru dengan data baru, misal kita punya index 3, maka akan di buat lagi index ke 4
$siswa[]='rafei';
var_dump ($siswa);

// unset( $nama array[index]) -> menghapus data di array menggunakan index, sesuai dengan index.
unset($siswa[6]);
var_dump ($siswa);

//count($nama array) -> untuk mengambil total erapa data di dalam array nya
var_dump(count($siswa));
echo "\n";

//coba bentuk/implementasi lain
echo(count($siswa));
echo "\n";

//array sebagai map, di php array bisa di gunakan sebagai map
//apa itu map? map itu adalah tipe data yang menggubakan key dan value, dan di php map bisa di buat menggunakan array
//biar gampang, index itu seperti key nya dan value itu adalah isi index nya
//dan juga kita bisa menggunakan tipe data lain seperti string misal nya, jadi tidak harus menggunakan nomor index untuk mengubah isi nya
//karena hal tersebut lah array php terlihat sebagai map di bahasa pemogrman lain

//kode membuat map 
$lemari = array (
    "baju" => "kaos",
    "celana"=>"cargo"
);
var_dump($lemari);

//array di dalam array, array juga bisa di buat di dalam array, jadi nya seperti ini
$sekolah= [
    "nama" => "daus",
    "tempat" => [
        "jurusan" => "RPL",
        "kelas" => 12
    ]
];
var_dump($sekolah);
echo"\n";
//atau jika ingin memilih atau  memunculkan satu array saja bisa menggunakan ini
var_dump($sekolah["tempat"]["jurusan"]);

//coba bentuk/implementasi lain
$keluarga = ["ayah", "ibu", "kaka1",["saudara1","saudara2"]];
var_dump ($keluarga);
var_dump($keluarga[3][1]);