<?php
//if statement 
//if adalah salah kata kunci untuk percabangan
//percabangan itu artinya kita bisa mengeksekusi kode pemograman ketika suatu kondisi sudah terpenuhi

//sintak if ada 2
// if (syarat yang harus terpenuhi){
//     di dalam sini, adalah kode yang akan di jalankan berikut nya, ketika syarat terpenuhi      
//  }
//seperti ini 
$A = 10;
$B = 20;
if($A + $B =30){//hasil dari if statmen itu adalah bolean
    echo"selamat\n";
    echo"kamu berhasil\n";
    echo"ini adalah cara menggunakan if yang pertama\n";
}

//lalu untuk sintak if yang kedua adalah 
if($A + $B =30)
 echo"dan yang ini adalah ke dua\n"."\n";
//if yang kedua ini sangat jarang di gunakan, karena cuman bisa menampilkan 1 statement

//else statement
//terkadang kita ingin mengeksekusi kode pemograman ketika bernilai false
//jadi ketika syarat nya terpenuhi, maka akan muncul if jika itu benar dan ketika salah akan muncul else
echo "versi yang ada else nya :\n";
$A = 10;
$B = 20;
if($A + $B <30){ //syarat nya di sini, value dari variable A + B apakah kurang dari 30?
    //kalau iya, maka akan muncul ini (jika true)
    echo"selamat\n";
    echo"kamu berhasil\n";
} else {//kalau tidak, maka akan muncul ini (jika false)
    echo "maaf, kamu gagal\n";
    echo "coba lagi lain kali\n";
};

echo"\n";

//ada else if statement, ini guna nya kita bisa membuat beberapa kondisi
//gambaran nya itu kita membuat if else lagi, di dalam if else, seperti ini

echo "ini adalah contoh else if statement:\n";
$A = 50;
$B = 50;
if($A + $B >90){ //syarat nya di sini, kalo terpenuhi, maka akan muncul true, tapi jika tidak, maka akan di lanjutkan di else if di bawah nya.
    //kalau iya, maka akan muncul ini (jika true)
    echo"selamat\n";
    echo"kamu berhasil lulus dengan nilai sempurna";
} else if ($A + $B >50 ){//pemeriksaan ulang
    echo "selamat\n";
    echo "kamu lulus dengan nilai cukup memuaskan";
} else if($A + $B <=30){//pemeriksaan ulang
    echo "kamu gagaal\n";
    echo "coba lagi lain kali";
} else {
    "kamu gagal, silakan keluar dari sekolah";
}

//coba implementasikan
echo "membuat sistem penilaian, minimal nilai 80 untuk lulus\n";
$nilai1 = 50;
$kehadiran = 50;
$hasil = ($nilai1 + $kehadiran);

echo"hasil :"."\n";
if ($nilai1 >=50 && $kehadiran >=30){
    echo"selamat anda lulus, dengan nilai $hasil";
} else {
    echo "maaf, nilai anda kurang dari 80. nilai anda adalah $hasil";
};