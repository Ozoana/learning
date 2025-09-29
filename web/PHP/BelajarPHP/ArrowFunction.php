<?php
//arrow function ini sama saja dengang anonymous
//beda nya, arrow function busa menggunakan variable yang di luar closure
//dan juga arrow function tidak bisa se kompleks anonymous, bisa di bilang arrow function ini adalah anonymous versi sederhana
//dan harus menggunakan PHP 7.4 atau di atas nya

//untuk menggunakan arrow ini, kita perlu sintak fn 
$kaliDua = fn($angka) => $angka * 2;

echo "\n";
echo $kaliDua(5); // Output: 10

//ini versu yang di luar closure

$pembilang = 100;

$persen = fn($angka) => ($angka / $pembilang) * 100;
echo "\n";
echo $persen(25); // Output: 25
