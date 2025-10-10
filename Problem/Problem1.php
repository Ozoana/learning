<?php

// require "./init.php";

//misal didalam array ada data 1 sampai 10 
//lalu aku ingin mengetahui apakah nilai 6, 7 dan 8 ada didalam array itu

// daus
$mulai = microtime(true);

$nilai = [10,9,8,7,6,5,4,3,2,1];
$cari = [6,7,8];

foreach ($cari as $A){
    
    $nomor = false;

    foreach ($nilai as $B){
        if ($A == $B ){
                $nomor = true;
        }
    }

    if ($nomor){
        echo "semua nya ada\n";
            break; }
        else{
        echo "semua nomor tidak ada\n";
          break; 
    }
}

$selesai = microtime(true);

// hitung selisih waktu 
$lama = $selesai - $mulai;

echo "Waktu eksekusi: " . number_format($lama, 6, '.', '') . " detik\n";

// aspian

// $datah = generate(100000);
// $to_found = generate(10000); // [2, 74,1214124, 2323];
// $founds = [];

// echo "Data lenght " . count($datah) . "\n";

// $start = microtime(true);

// foreach ($datah as $i) {
//     foreach ($to_found as $j) {
//         if ($i === $j) {
//             $founds[] = $i;
//         }
//     }
// }

// echo "Found: " . count($founds) . " items\n";

// $duration = microtime(true) - $start;
// echo "Execution time: " . round($duration, 6) . " seconds\n";
