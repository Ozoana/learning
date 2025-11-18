<?php
//misal didalam array ada data 1 sampai 10 
//lalu aku ingin mengetahui apakah nilai 6, 7 dan 8 ada didalam array 

$mulai = microtime(true);

$nilai = [10,9,8,7,6,5,4,3,2,1];
$cari = [6,7,8];

foreach($cari as $a){
    foreach ($nilai as $b){
        if ($a == $b){
           echo "semua ada\n";
        }
    }
}


$selesai = microtime(true);

// hitung selisih waktu 
$lama = $selesai - $mulai;

echo "Waktu eksekusi: " . number_format($lama, 6, '.', '') . " detik\n";
