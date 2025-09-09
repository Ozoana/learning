<?php

//Operator = Simbol untuk melakukan operasi
//operator aritmatika berarti simbol yang berada di matematika seperti tambah(+), kurang(-), kali(X), bagi(:) dan yang lain nya
//itu semua bisa di gunakan di php

$a = 20;
$b = 10;

echo $a + $b; // 30
echo "\n";

echo $a - $b; // 10
echo "\n";

echo $a * $b; // 200
echo "\n";

echo $a / $b; // 2
echo "\n";

//kita juga bisa memberikan nilai tetap, seperti positif atau tidak 
$c = 7;
$posi= +$c; //dan ini nilai dari variable c nya akan jadi plus
$mines= -$c; //ini berarti nilai dari variable $c akan berubah menjadi mines
echo $mines;
echo"\n";
echo $posi;
echo"\n";

//operator penugasan, operator penugasan itu sama seperti memberi value pada suatu variable, dengan menggunakan tanda "="
//jadi sebenar nya bisa di singkat seperti ini

$minum = 2000;
$makan = 1000;

$total = null;

$total += $minum;
$total += $makan;
echo "$total\n";
//bisa juga selain sintak += ada -=, /=, *=, %=

//coba bentuk/implementasi lain
$A = 12;
$B = 13;
$tambahan = $A + $B;
$kurang = $A - $B;
$bagi = $A / $B;
$kali = $A * $B;
$sisabagi = $A % $B;
$pangkat = $A ** $B;
echo "$tambahan\n";
echo "$kurang\n";
echo "$bagi\n";
echo "$kali\n";
echo "$sisabagi\n";
echo "$pangkat\n";





