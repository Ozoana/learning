<?php

//misal didalam array ada data 1 sampai 10 
//lalu aku ingin mengetahui apakah nilai 6, 7 dan 8 ada didalam array itu

$nilai = [10,9,8,7,6,5,4,3,2,1];
$cari = [6,7,8];

foreach ($cari as $A){
    
    foreach ($nilai as $B){
        if ($A == $B ){
            echo "semua nilai ada";
        }
    }
}