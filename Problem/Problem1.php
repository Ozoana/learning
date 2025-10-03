<?php

//misal didalam array ada data 1 sampai 10 
//lalu aku ingin mengetahui apakah nilai 6, 7 dan 8 ada didalam array itu

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