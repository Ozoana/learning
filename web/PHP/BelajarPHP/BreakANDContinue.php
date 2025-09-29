<?php

//break dan continue di perulangan ini  seperti sebuah operator di perulangan
//break itu Langsung menghentikan perulangan
//Saat PHP membaca break, dia akan keluar dari perulangan, walaupun kondisinya masih benar

//contoh break 
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // berhenti saat i = 5
    }
    echo "Angka: $i\n";
}

echo "\n";  
//sedangkan continue itu seperti Lewati baris sekarang, langsung lanjut ke perulangan berikutnya
//Kode setelah continue akan dilewati, tapi perulangan tetap jalan

//contoh continue
for ($A = 1; $A <= 5; $A++) {
    if ($A == 3) {
        continue; // lewati angka 3
    }
    echo "Angka: $A\n";
}

echo "\n";

//coba implementasi
for ($B = 1; $B <= 10; $B++) {
    if ($B == 4 or $B == 6) {
        continue; // lewati 4
    }
    if ($B == 8) {
        break; // berhenti di 8
    }
    echo "Nomor: $B\n";
}
