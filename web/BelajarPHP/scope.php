<?php
//Variabel di PHP punya ruang lingkup tertentu, tergantung di mana kamu buat variabel itu
//ada 3 ruang lingkup, global, local dan static
//ini contoh nya

//contoh variable global

 //  $a = "halo"//ini global
 //   function tampil() {
 //    echo $a; 

 //  }
//hasil nya tidak akan tampil variable a nya, karena dia di luar function tampil yang ku buat

//contoh local 

function tampilkan() {
    $nama = "daus";//nah ini nama nya variable local, karena dia di dalam function yang ku buat
    echo $nama; 
};

//berikut nya adalah static
//static ini seperti variable yang 	Di dalam function, tetapi, static ini kembali disimpan
//contoh

function tambah(){
    $hitung = 1;
    echo "ini nomor $hitung\n";
    $hitung ++;
};

tambah();
tambah();
tambah();
tambah();
tambah();
tambah();
//nah kalo begini hasil nya akan tetap satu kan
// karena siklus hidup variable itu cuman sekali jadi tidak di simpan
echo"\n";

function kurang(){
   static $hitung = 10;// nah ini adalah variavle static, jadi nilai dari function kurang di simpan di sini
    echo "ini nomor $hitung\n";
    $hitung --;
};

kurang();
kurang();
kurang();
kurang();
kurang();
kurang();

//nah di php ada yang nama nya key word global itu untuk function bisa memanggil variable yang di luar function
//seperti contoh di paling atas

$aa = "halo";//ini global

function tampil() {
    echo "\n";
    global $aa;//dengan menambahkan sintak global sebelum variable, maka variable yang global bisa di panggil di dalam function
    echo $aa; 

}

tampil();