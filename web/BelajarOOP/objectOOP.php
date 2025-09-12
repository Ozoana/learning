<?php
require_once 'classOOP.php';
//Supaya file tidak dimuat dua kali (misalnya kamu panggil class di banyak tempat), gunakan  _once

$gambar = "contohgm.jpg";
echo '<img src="'.$gambar.'" alt="Foto Halo">';

$orang1 = new orang();

var_dump($orang1);
