<?php

//Properti (field/atribut) adalah data/variabel yang dimiliki oleh sebuah object
//Properti/ field / attribut adalah data yang bisa kita sisipkan didalam object
//tapi sebelum kita bisa memasukan data di field, kita harus mendeklarasikan nya dulu data apa saja yang di miliki oleh object tersebut
// dengan cara deklarasi di dalam class
//namun ditempatkan di dalam class dan di awali kata kunci "var" biasa nya
class person
{
    var $name;
    var $address;
    var $country;
}

//di properti ini kita bisa menambahkan type declaration
//type declaration itu seperti menetukan itu int, float dan string DLL
//contoh : 

class sekolah
{
    var string $nama;
    var string $jurusan;
    var int $kelas;
}

//default properti value
//sama seperti  variable, di properti juga bisa langsung mengisi value nya 
//jadi jika value nya tidak di ubah, dia akan menggunakan velue default yang sudah di tuntukan
//contoh :

class car {
    var string $name;
    var string $color = "merah";
    var float $harga;
} 

//nullable properti
//saat kita menambahkan declarasion di properti ataau di function argument
//maka secara otomatis kita tidak bisa mengirim data null kedalam properti atau function argument 
//di PHP 7.4 keataas dikenalkan yang nama nya nullable type, jadi kita bisa mmengirim data null ke properti atau function argument
//cara memggunakan nya sebelum typr declarasion diberikan tanda tanya
//contoh:
class rumah {
    var string $tempat;
    var ?string $alamat = null;
}

//property dapat juga didefinisikan dengan beberapa cara selain var, contoh : 
class tess 
{
    public string $tessname;
    string $tessname;
    private $tessname;
}