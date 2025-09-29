<?php

//fungction argument, fungsi nya untuk fungction yang kita buat bisa mengirimkan data, itu guna nya fungction argument/parameter
//seperti ini 

function sapa($nama) {
    echo "Halo, $nama\n";
}
//$nama di dalam tanda kurung adalah argument/parameter (variabel penampung)
//jadi saat di panggil fungction nya, kita bisa menambahkan data ke dalam fungction nya, yang akan di kirim kan ke variable nama yang kita buat
sapa("edo");
sapa("Putri");

//argument/parameter nya bisa lebih dari satu, tapi jika lebih dari satu, maka harus menggunakan koma sebagai pemisah
//contoh ini

function nama($namaDepan, $namaBelakang) {
    echo "Halo, $namaDepan $namaBelakang\n";
}

nama("ahmad","pirdaus");

