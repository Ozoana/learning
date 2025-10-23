<?php

require "./init.php";

//misal didalam array ada data 1 sampai 10 
//lalu aku ingin mengetahui apakah nilai 6, 7 dan 8 ada didalam array itu

// daus
// $nilai = [10,9,8,7,6,5,4,3,2,1];
// $cari = [6,7,8];

// foreach ($cari as $A){
    
//     $nomor = false;

//     foreach ($nilai as $B){
//         if ($A == $B ){
//                 $nomor = true;
//         }
//     }

//     if ($nomor){
//         echo "semua nya ada\n";
//             break; }
//         else{
//         echo "semua nomor tidak ada\n";
//           break; 
//     }
// }

// aspian ganteng //

$datah = generate(900000);
$to_found = generate(1000); // [2, 74,1214124, 2323];

echo "Data lenght\t: " . count($datah) . "\n";
echo "To Found\t: " . count($to_found) . "\n";

$founds1 = [];
$start1 = microtime(true);

foreach ($datah as $i) {
    foreach ($to_found as $j) {
        if ($i === $j) {
            $founds[] = $i;
        }
    }
}

$duration1 = microtime(true) - $start1;

$founds2 = [];
$start2 = microtime(true);
$datah2 = array_fill_keys($datah, null);

foreach ($to_found as $i) {
        if (isset($datah2[$i])) {
        $founds2[] = $i;
    }
}

$duration2 = microtime(true) - $start2;


echo "Found: " . count($founds) . " items\n";
echo "1. Execution time: " . round($duration1, 6) . " seconds\n";
echo "2. Execution time: " . round($duration2, 6) . " seconds\n";
