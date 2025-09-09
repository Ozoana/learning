<?php

//function ini adalah blok kode yang diberi nama, dan bisa dipanggil kapan saja, bahkan berkali-kali.
//contoh nya

function buah(){
    echo "\n";
    echo "ada buah:\n";
    echo "mangga\n";
    echo "pisang\n";
    echo "apel\n";
    echo "anggur\n";
}

//setelah fungction nya di buah dan di berikan nama, kita tinggal memanggil fungction nya saja, dengan nama yang sudah kita buat
//seperti ini

buah(); //dan ini bisa di panggil lagi
//contoh nya
buah(); 
buah(); 

//perlu di ingat, jika di php harus menulis function nya dulu, baru bisa di panggil
//jangan panggil fungction nya dulu, baru di buat fungction nya, itu salah