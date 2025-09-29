<?php
//di php ada fitur yang nama nya variable function
//guna nya untuk bisa memanggil function dengan menngunakan variable
//contoh

function nama(){
    echo "ahmad pirdaus\n";
    echo "ahmad\n";
    echo "pir\n";
    echo "daus\n";
}

$panggilfungction = nama();
$panggilfungction();

//ini juga bisa di berikan argument/parameter
//contoh nya    
function sapa($nama) {
    echo "Halo, $nama!\n";
}

$fungsi = "sapa";
$fungsi("Ahmad"); // memanggil function sapa("Ahmad")
