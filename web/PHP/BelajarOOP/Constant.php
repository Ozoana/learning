<?php
//Constant 
//Costan ini sama seperti variable, cuman beda nya, isi nya tidak bisa di ubah, sedangkan variable bisa di ubah.
//prpperti di class bisa di ubah, mirip seperti variable
//di class juga kita bisa membuat constant
//di maerti php dasar, cara menggunakan Constantya itu denagan cara define()
//namun sejak PHP 7.4 keatas, kita bisa menggunakan Constant denagan katakunci mirip seperti variable, namun tidak menggunakan karakter $
//contoh nya :

const kelas = 12;

echo "hasil nya :".kelas;

//Constant juga bisa di dalam class 
echo "\n";
echo "ini contoh jika menggunakna constant didlaam class, dibagian objeck nya agak berbeda :";
class pulpen{
    const PEMILIK = "daus";
}
//ini cara akses object nya :
echo pulpen::PEMILIK;
