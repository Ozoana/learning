<?php

//for loop atau perulangan
//kode ysng ada di dalaam for loop akan selalu di jalankan jika 'kondisi' nya truee
//sintak for loop 
// for (statment pertama ; statmen kedua ; statmen ketiga ){
// isi dari perulangan nya
// }

//di statmen pertama di dalam lop, itu dia akan di periksa ketika program nya berjalan dan hanya di periksa sekali ketika program jalan
//di statmen kedua, ini akan selalu di periksa ketika perulangan nya sudah selesai dan ini biasa nya di gunakan untuk memberi batas di perulangan nya
//jadi ketika batas yang sudah kita tentukan ini sesuai dengan perulangan nya, maka dia akan berhenti, tapi jika belum, maka dia akan terus menjalankan nya
//sampai sesuai dengan batas yang kita tentukan, karena itu juga, biasa nya statmen kedua ini berisi sampai mana kode nya di ulang
//di statmen ketiga ini, akan selalu di periksa ketika selesai perulangan nya.

//for (nilai_awal; kondisi_berhenti; perubahan) {
    // blok kode yang dijalankan selama kondisi TRUE
//}

//ini contoh kode nya
// for ($number = 1 ; $number >= 10 ; $number++){
//     echo "ini nomor $number\n";
// }

//coba buat impemtasi
$angka = (111);

for ($numberdihitung = $angka ; $angka >= 1 ; $angka--){
    echo "ini $angka\n";
}





