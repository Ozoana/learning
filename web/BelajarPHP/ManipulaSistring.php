<?php

//kita akan memanipulasi data string
//cara untuk menambahkan data di string, dengan menggunakan dot(titik)
$belakang = "pirdaus";
echo "halo nama ku ".$belakang."\n";

//konversi ke number dan sebalik nya
//cukup menggunakan tanda kurang untuk tipe data nya
$number = (int)"100";
var_dump ($number);

$string = (string)100;
var_dump($string);

//megakses karakter
//string juga bisa di akses seperti nomor index di array, jadi kita bisa milih hurup yang mana yang kita inggin akses
$nama = "daus";
echo $nama [2]."\n";//sama seperti array, index nya mulai dari 0, jadi 0 itu 1
echo $nama [3]."\n"."semangat\n";

//variable parsing
//ini khusus untuk doubl eqoute(petik dua) atau heredoc
//variable parsing ini, kita bisa langsung memanggil variable nya, tampa perlu dot(titik)
echo "halo, panggil aku $nama"."\n";

//curly brace
//kadang kita perlu menggabungkan variable dengan string, tampa ada spasi
// contoh nya, coba liat hurup z nya, ketika di run
echo "halo, panggil aku pir{$nama}z selamat belajar\n";
echo "halo, panggil aku pir $nama z selamat belajar";
