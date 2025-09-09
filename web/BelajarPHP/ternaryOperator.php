<?php

// sama seperti if else, tapi Ternary operator adalah cara cepat menulis if-else dalam satu baris saja

//contoh yang mengunakan if-else

//  $gender = "laki-laki";
//  $halo = null;
//  if ($halo) {
//        $halo = "halo broo";
//  } else {
//         $halo = "halo nona";
//  }

//  echo $halo;

//dan ini adalah switch

$gender = "laki laki";
$halo = null;
$halo = ($gender == "laki laki") ? "halo broo" : "halo nona";
echo $halo;