<?php
//Recursive function adalah kemampuan memanggil function diri nya sendiri
//Recursive function ini biasa nya di gunakan untuk khasus yang nama nya factorial
//apa itu factorial? factorial itu khasus untuk menghitung perkalian yang di mana kalian nya ini selalu berkurang
//begini, 10 kali 9, 9 kali 8, 8 kali 7,7 kali 6,6 kali 5,5 kali 4 dan seterus nya sampai dikali 1
//sebenarnya pakai for loop bisa, tapi lebih mudah pakai Recursive function 

//versi for loop 
function faktorialForloop(int $angka) : int {
    
    $total=1;
    for ($i=1;$i<=$angka;$i++){
        $total *= $i;
    }
    return $total;
}

var_dump(faktorialForloop(5));//jika versi for loop dia mulai di kali dengan 1 sampai batas yang di tentukan


//versi recursive
function faktorialRecursive($angka) {
    if ($angka <= 1) {
        return 1; 
    } else {
        return $angka * faktorialRecursive($angka - 1); 
    }
}

var_dump(faktorialRecursive(5));//sedangkan recursive dia mulai dari batas yang di tentukan sampai 1

