<?php
require "requiredaninclude/Dipanggil/requirePanggil.php";//sesuai letak dimana file nya di buat.

//require dan include
//Keduanya dipakai untuk mengambil file PHP lain yang ada di folder lain
//jadi semisal kamu  punya function di dalam file, yag dimana file nya itu berada di folder lain, kamu bisa menggunakan require dan include

sapa ("daus");
// Perbedaan include	require
// Jika file tidak ditemukan maka Akan ERROR dan program berhenti
// Sifat : fatal
// Cocok untuk file Wajib dan file penting
