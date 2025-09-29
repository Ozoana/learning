<?php
//return adalah cara untuk mengembalikan hasil dari sebuah function ke tempat di mana function itu dipanggil.
//Ibaratnya, function itu seperti mesin, dan return adalah hasil keluarannya.
//contoh nya

function jumlah($a, $b)     {
    return $a + $b;
}

$hasil = jumlah(5, 3);//nah ini, kita harus mmembuah variable baru, untuk menampung hasil dari variable a + variable b.
// dan fungsi return adalah, agar nilai nya di kembalikan ke variable hasil, jadi ketika sudah  menghitung, dia akan mengambalikan nilai nya. 
echo "$hasil\n";
$hasil = jumlah(10, 10);
echo "$hasil\n";

//kadang untuk tidak bingung, return juga bisa ditambahkan Type Declaration
//: int, sangat penting, agar return nya sesuai yang kita mau, contoh nya itu, jiak menggunakan string, maka tidak akan bisa karena kita sudah menentukan tipe nya
//contoh nya 
function tambah(int $a, int $b): int {
    return $a + $b;
}

echo tambah(3, 5); // 8

echo "\n";

//coba implemtasi
function getnilai($nilai) {
    if ($nilai >=50){
        return "A";
    } else {
        return "C";
    }

}

$hasilnilai = getnilai(60);
echo "$hasilnilai\n";