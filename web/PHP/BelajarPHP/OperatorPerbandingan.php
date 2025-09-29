<?php

//operator perbandingan, sesuai nama  nyaa di gunakannuntuk membandingkan dua buah value
//dan hasil perbandingan nya adalah bolean, ada true atau false

//ada banyak operator perbandingan ada :
//(konversi itu mengubah tipe data nya menjadi sama dulu, semisal variable pertama ya itu string dan variable kedua itu int, maka string nya akan di cek jadi int/sebalik nya)

//$nama variable == $nama variable      | true jika variable pertama dengan variable kedua sama setelah di lakukan konversi tipe data
//$nama variable === $nama variable     | true jika variable nya sama dan juga tipe data nya harus sama
//$nama variable != $nama variable      | true jika variable tidak sama dan sudah dilakukan konversi tipe data
//$nama variable <> $nama variable      | true jika variable tidak sama setelah di lakukan konversi
//$nama variable !== $nama variable     | true jika variable tidak sama atau tidak sama tipe data nya
//$nama variable < $nama variable       | true jika variable pertama kurang dari variable kedua
//$nama variable <= $nama variable      | true jika variable sama dengan atau kurang dari
//$nama variable > $nama variable       | true jika variable pertama lebih dari variable kedua
//$nama variable >= $nama variable      | true jika variable sama dengan atau lebih

$a = "10";
$b = 10;
$c = "11";
var_dump($a == $b);
var_dump($a === $b);
var_dump($b != $c);
var_dump($b <> $c);
var_dump($b !== $c);
var_dump($b < $c);
var_dump($b <= $c);
var_dump($b > $c);
var_dump($b >= $c);