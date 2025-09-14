<?php

require_once 'Properti.php';
//sekarnag untuk mengisi data nya
//karena kita sudah menggunakan var, kita harus menggunakan kata kunci "->" untuk mengisi data nya
//jadi setelah nama object dan di ikuti nama properti nya

$person1 = new person();
$person1->name = "daus";
$person1->address = "kalimantan";
$person1->country = "indonesia";

// nah itu untuk mengisi isi data nya.
//nah jika ini untuk menampilkan data nya

echo "name : {$person1->name}\n";
echo "address : {$person1->address}\n";
echo "country : {$person1->country}\n";
