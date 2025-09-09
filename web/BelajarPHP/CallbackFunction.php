<?php 
//callback Function itu adalah 
// function yang dikirim sebagai argumen ke function lain, dan akan dipanggil kembali (called back) oleh function tersebut.
// lalu kita bahas fungsi PHP-nya yang namanya call_user_func() //sebenarnya kita bisa tidak menggunakan call_user_func(), tapi lebih baik di gunakan
//  Fungsi PHP bawaan untuk memanggil function berdasarkan nama, biasanya digunakan untuk menjalankan callback function.
// kelebihan call_user_func() adalah :
// Dari nama dalam string
// Dari data di luar program
// Dari anonymous function
// Dari class atau object
//itulah kenapa kita butuh call_user_func()

//ini contoh nya : 
function prosesData($angka, $callback) {
    return call_user_func($callback, $angka);
}

function kaliTiga($nilai) {
    return $nilai * 3;
}

$hasil = prosesData(10, "kaliTiga");

echo "Hasil: $hasil\n"; // Output: 30

//jadi sekarang jika ingin membuat parameter/argument lalu ingin di anggap function, maka lebih baik menggunakan callback ini


