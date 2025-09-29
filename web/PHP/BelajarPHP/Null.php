<?php

//Data Null itu berarti kosong, jadi Null itu menggambarkan variable yang kosong atau tidak ada nilai nya, di dalam nya
//ibarat nya kita membuat sebuah wadah, tapi wadah nya itu kosong, tidak ada isi nya
// untuk penulisan kata null itu bersifat Case insensitive, artinya bebas, bisa hurup besar semua atau kecil semua, atau gabungan. 

// tipe data null juga bisa di gunakan misal nya ada variavle yang sudah ada isi nya, lalu mau kita ubah menjadi kosong/tidak ada nilai
$umur = (17);
$umur = NULL;

$nama = null;

echo "umur :\n";
echo $umur;
echo "nama :\n";
echo $nama;
echo "\n";

//caracek apakah data itu null
//kadang kita perlu tau apakah data ini punya nilai "Null" atau tidak
//untuk mencek itu, maka bisa menggunakan function : is_null( $ nama variable)

$NAMA = "Pirdaus";

echo is_null($nama);
echo is_null($NAMA);
echo "\n";
echo "\n";

//maka akan keluar hasil 1, itu berarti ada isi nya null jika tidak ada yang muncul berarti nilai nya tidak null
//agar lebih memudah kan, bisa di gabung dengan function var_dump

var_dump(is_null($nama));
var_dump(is_null($NAMA));

//selain itu juga, jika kita ingin benar benar menghapus nilai variable dan bukan mengganti nya jadi null
//bisa dengan function : unset (nama variable)

$ujicoba = "tess unset";
unset ($ujicoba);

echo $ujicoba;
echo "\n";
//maka akan muncul undefind variable, berarti sudah di hapus, benar benar di hapus, bukan di ubah jadi null

// function isset : isset (nama variable)
//function isset itu di gunakan untuk mencek apakah variable itu ada atau tidak ada, beda dengan function is_null
// function is_null cuman mencek apakah variable itu nilai nya null atau tidak
// sedangkan  function isset selain dia mencek apakah variable itu ada atau tidak ada, dia juga mencek nilai nya null atau tidak

var_dump(isset($ujicoba));
