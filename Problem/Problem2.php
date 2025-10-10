<?php

//di file problem 1 kita sudah mmebuat solusi nya
//tapi bagaimana jika data didalam array nya ada banyak. misal 1 sampai 50
//itu akan memakan waktu  yang berbeda untuk mencari data nya di dalam array

$mulai = microtime(true);

$angka = [];
$cari = [12,50,70,900,233];
for($i = 1; $i<=10000; $i++ ){
    $angka [] =$i;
}

foreach($cari as $a){
    foreach ($angka as $b){
        if ($a == $b){
           echo "semua ada\n";
        }
    }
}
$selesai = microtime(true);

// hitung selisih waktu 
$lama = $selesai - $mulai;

echo "Waktu eksekusi: " . round($lama, 6) . " detik\n";