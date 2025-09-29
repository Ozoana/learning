<?php

//di php array memiliki operator khusus. Operator = Simbol untuk melakukan operasi khusus
//ini akan sedikit berbeda dengan operator sebelum nya

//$nama array + $nama array     | menggabungkan array pertama dan kedua
//$nama array == $nama array    | true jika kedua array memiliki key-value yang sama
//$nama array === $nama array   | true jika kedua array memiliki key-value yang sama dan posisi nya sama
//$nama array != $nama array    | true jika kedua array tidak sama
//$nama array <> $nama array    | true jika kedua array tidak sama 
//$nama array !== $nama array   | true jika kedua array tidak memiliki key-value yang sama dan posisi nya sama

//membuat nya seperti map
$pertama = ["nama depan"=>"ahmad"];
$kedua = ["belakang"=>"pirdaus"];
$tambah = ($pertama + $kedua);//ini akan di dahulukan nya, array pertama yang di sebut, jika ada data yang sama di array ke dua, maka akan di ignore/tidak di anggap
var_dump($tambah);

$A = [
    "nama depan"=>"ahmad",
    "belakang"=>"pirdaus"
];

$B = [
    "belakang"=>"pirdaus",
    "nama depan"=>"ahmad"
];

$hasil1 = ($A == $B);//isi nya sama
$hasil2 = ($A === $B);// isis nya sama, tapi beda posisi
$hasil3 = ($A != $pertama);//isi tidak sama
$hasil4 = ($A <> $pertama);//isi tidak sama
$hasil5 = ($A !== $B);//isi tidak sama, posisi tidak sama
var_dump ($hasil1);
var_dump ($hasil2);
var_dump ($hasil3);
var_dump ($hasil4);
var_dump ($hasil5);