<?php

//Anonymous Function adalah function tanpa nama (alias "function anonim")
//yang bisa disimpan ke dalam variabel, parameter, atau return value.
//anonymous function biasa nya digunakan untuk sebagai argumen atau value di variable
//jadi dari pada cape cape bikin fungction dulu kita bisa membuat function di dalam variable 
//contoh 

$sapa = function($nama){
    echo "Halo, $nama\n";
};
 //bisa mengunakan argument/parameter opsional saja
$sapa("Ahmad"); 
$sapa("padeli"); 

echo"\n";

//Anonymous Function Sebagai Argument/Parameter
//biasa nya Kita ingin mengirim function ke dalam function lain
// ada 2 versi, yang menggunakan Variable Function dan Anonymous Function

//ini yang Variable Function
function kaliDua($angka) {
    return $angka * 2;
}

function prosesData($data, $namaFungsi) {
    return $namaFungsi($data); // variable function
}

$hasil = prosesData(10, "kaliDua");//ini dia memanggil function "kalidua"

echo "Hasil: $hasil\n"; // Output: Hasil: 20


//perbedaan nya penggunaan nya adalah, kalo Variable Function itu dia menggunakan function yang sudah ada
//jika Anonymous Function dia menciptakan fungction sekalian
//jadi 


//dan ini versi anonymous function 
function prosesData($data, $fungsi) {
    return $fungsi($data);
}

$hasil = prosesData(10, function($angka) {
    return $angka * 2;
});//nah kalo ini dia mmembuat function lagi di dalam nya

echo "Hasil: $hasil\n"; // Output: Hasil: 20


// variable diluar closure. kalo di Anonymous Function kita bisa mengakses variable yang diluar closure
// contoh nya : 
 $nama = "Ahmad";
 $sapa = function() {
      echo "Halo, $nama\n"; //ini pasti eror dengan alasan : Undefined variable $nama
 };
 $sapa()
// Ini akan error, karena $nama di luar function, dan tidak otomatis terbawa masuk.
// nah jadi solusi nya adalah menggunakan fitur yang nama nya : use

//tambahkan use, seperti ini
$nama = "Ahmad";

$sapa = function() use ($nama) { 
    echo "Halo, $nama\n"; //Sekarang bisa
};

$sapa(); 

