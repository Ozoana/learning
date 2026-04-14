<?php

// Buat program untuk menentukan kelulusan:

// * Jika nilai ≥ 75:

//   * Jika kehadiran ≥ 80 → *LULUS*
//   * Jika tidak → *TIDAK LULUS (Kurang Kehadiran)*
// * Jika nilai < 75 → *TIDAK LULUS (Nilai kurang)*

$nilai = 80;
$hadir = 10;

if($nilai >= 75){
    if($hadir >= 80){
        echo "lulus";
    }else{
        echo"kurang kehadiran";
    }
}else{
    echo "tidak lulus";
}