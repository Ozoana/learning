<?php

//variable adalah wadah/tempat untuk menyimpan data
//untuk membuat variable di php perlu menggunakan tanda "$" lalu nama variable nya, terserah apa nama nya yang pentung tidak menggunakan spasi

$nama = "daus";
$umur = "17"; 

echo $nama;
echo "\n";
echo $umur;
echo "\n";

//fitur variable variables, fitur ini membuat nama variable dari isi variable lain, contoh nya 

$buah = "pisang\n";
$$buah = "manis\n";

echo $buah;
echo $$buah;

//$buah berisi "pisang" dan $$buah berisi "manis". 
//ibarat nya $manis = "pisang"
//karena $buah = "pisang", maka $$buah = $pisang.
//fitur ini jarang di gunakan karena kadang kadang membuat bingungan sistem code nya, jadi gunakan fitur ini jika sangat di perlukkan saja

// function echo cuman bisa memunculkan variable yang berisi string dan number, selebih nya tidak
//coba bentuk/implementasi lain
echo "\n";

$NAMA = "daus\n";
$KELAS = "RPL 2\n";

echo $NAMA;
echo $KELAS;

echo "\n";

$string = "daus";
$numberINT = (12);
$numberFLOAT = (1.2);

echo $string;
echo "\n";
echo $numberINT;
echo "\n";
echo $numberFLOAT;
echo "\n";
echo "\n";
var_dump ($numberINT);
var_dump ($numberFLOAT);

echo "halo nama ku ";
echo $string;