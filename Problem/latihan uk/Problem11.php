<?php

// Buat program untuk menentukan nilai siswa:

// * Jika nilai ≥ 85 → *A*
// * Jika nilai ≥ 70 → *B*
// * Jika nilai ≥ 60 → *C*
// * Selain itu → *D*

// Input: nilai (bebas, bisa dari variabel)
// Output: grade

$nilai = 62;

if ($nilai>=85){
echo "$nilai = A grade";
}elseif($nilai>=70){
echo "$nilai = B grade";
}elseif($nilai>=60){
echo "$nilai = c grade";
}else{
 echo "$nilai = D grade";
}