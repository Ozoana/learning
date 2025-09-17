<?php

require_once 'Properti.php';
//sekarnag untuk mengisi data nya
//karena kita sudah menggunakan var, kita harus menggunakan kata kunci "->" untuk mengisi data nya
//jadi setelah nama object dan di ikuti nama properti nya

$person1 = new person();
$person1->name = "daus";
$person1->address = "kalimantan";
$person1->country = "indonesia";

// nah itu untuk mengisi isi data nya.
//nah jika ini untuk menampilkan data nya
echo "\n";
echo "name : {$person1->name}\n";
echo "address : {$person1->address}\n";
echo "country : {$person1->country}\n";

//properti menggunakan type declaration :
$siswa = new sekolah();
$siswa ->nama = "daus";
$siswa ->jurusan = "RPL";
$siswa ->kelas = 12; //misal di isi dengan string "12" juga benar, karena php memiliki type juggling

echo "\n";
echo "ini contoh menggunakan type declaration : \n";
echo "nama : {$siswa->nama}\n";
echo "jurusan : {$siswa->jurusan}\n";
echo "kelas : {$siswa->kelas}\n";

//properti menggunakan value default :
echo "\n";
echo "ini contoh menggunakan value default : \n";

$mobil = new car();
$mobil ->name = "avanza";
$mobil ->harga = 1.1;

echo "name : {$mobil->name}\n";
echo "color : {$mobil->color}\n";
echo "harga : {$mobil->harga}\n"; 

//ini jika diberikan value default tapi isi nya di ubah, jadi dia menggunakan data terbaru, bukan default
$mobil2 = new car();
$mobil2 ->name = "Supra";
$mobil2 ->color = "hitam";
$mobil2 ->harga = 5.7;

echo "\n";
echo "ini contoh value default tapi menggunakan data yang di berikan, bukan default:\n";
echo "name : {$mobil2->name}\n";
echo "color : {$mobil2->color}\n";
echo "harga : {$mobil2->harga}\n"; 

//contoh properti menggunakan nullable :
echo "\n";
echo "ini contoh menggunakan type nullable : \n";

$home = new rumah();
$home ->tempat = "kalimantan";
$home ->alamat = null;//karena di set nullable

echo "tempat : {$home -> tempat}\n";
echo "alamat : {$home -> alamat}\n";

