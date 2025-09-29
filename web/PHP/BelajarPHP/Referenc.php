<?php
//reference 
//Menunjuk ke variabel yang sama, jadi kalau satu berubah, semua ikut
//contoh 
$a = 10;
$b = &$a;

$b = 20;
echo $a."\n"; 

//reference juga bisa seperti ini, ini reference function
function hitung(&$nilai) {
    $nilai += 5;
}

$x = 10;
hitung($x);
echo $x; // Output: 15
