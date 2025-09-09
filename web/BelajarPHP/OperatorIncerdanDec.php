<?php
//operator increment dan decrement
//operator ini biasa nya di gunakan untuk menaikkan data/value number

// ini contoh increment
$A = 10;
$B = $A++;//variable B sama dengan A, A di tambah satu

echo"ini post increment nama nya:\n";
var_dump($B);
var_dump($A);
// nilai variable B sama dengan A, lalu akan di tambah satu, sesuai jumlah tanda plus nya
// lalu variable A bernilai 11, karena sudah di tambahkan 1 dan B tetap 10, karena variable A nya, di taruh di awal
//ini yang tidak di letakan di awal

$A = 10;
$B = ++$A;//variable B sama dengan, A di tambah satu
//berbeda dengan sebelum nya. jika ini nilai variable B sama dengan nilai varible A yang sudah di tambah 1
echo"ini pree increment nama nya:\n";
var_dump($B);
var_dump($A);

// ini contoh decrement
echo"decrement:\n";

$A = 10;
$B = $A--;//variable B sama dengan A, A di kurang satu
echo"ini post decrement nama nya:\n";
var_dump($B);
var_dump($A);

echo"ini pree decrement  nama nya:\n";
$A = 10;
$B = ++$A;//variable B sama dengan, A di kurang satu