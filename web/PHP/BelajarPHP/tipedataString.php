<?php

//string ini ada banyak cara untuk di buat, di php, tapi kali ini akan menggunakan cara yang nama nya single quote
// single quote itu menggunakan tanda petik satu, seperti ini :

echo 'ini contoh nya. semua yang ada dalam tanda petik satu ini, di hitung, string, bahkan untuk spasi nya';

echo "\n";
echo "\n";

//dan ini adalah cara kedua, ya itu Double quote, Double quote itu berarti menggunakan tanda petik dua
//selain itu juga Double quote itu punya fitur enter, sedangkan di single quote tidak bisa
// untuk menambahkan enter, cukup tambahkan \n untuk ENTER, dan \t untuk TAP. 
// sedangkan di single quote, perlu menambahkan lagi echo "\n" di akhir, untuk bisa ter ENTER

echo "nama ku\t ahmad pir daus\t aku baru belajar php dasar\n" ;
echo "helo\n";
echo "\n";

//fitur baru
// di php, ada fitur baru yang di ciptakan untuk string yang panjang dan lebih dari satu baris, jadi tidak perlu perbaris nya di akhiri \n
// ada dua fitur baru, ya itu Heredoc dan Nowdoc

//Heredoc
// untuk Heredoc, cara menggunakan nya harus dengan perintah "<<<" lalu di akhiri dengan text/string apapun
//  asal text yang di gunakan harus sama dengan penutup, contoh nya saya menggunakan text "tes" dan harus di akhiri dengan "tes" juga
// semua yang ada di dalam "tes" di anggap string
echo <<<tes
ini contoh string yang panjang 
dan juga perlu enter secara manual
selamat belajar php


tes;

//Nowdoc
//sama seperti Heredoc, tapi di Nowdoc tidak bisa menggunakan kemampuan parsing
//parsing itu seperti kemampuan nya dalam membaca string yang kita buat, jadi semua yang ada dalam Nowdoc, di anggap string
//gambaran nya itu seperti single quote dan Double quote
//  jika di single quote \n di anggap text, tapi jika Double quote \n di anggap ENTER, bukan string.
// untuk Nowdoc, cara menggunakan nya harus dengan perintah "<<<" lalu di akhiri dengan text/string apapun tapi di tambah tanda petik satu

echo <<<'tes1'
ini contoh string yang panjang 
dan juga perlu enter secara manual
tapi meggunakan Nowdoc


tes1;

