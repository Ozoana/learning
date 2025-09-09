<?php
//opertor logika adalah operator untuk membandingkan boolean dan hasil nya tetap boolean lagi dan ini cuman bisa boolean

//$nama variable && $nama variable      | true jika kedua nya true
//$nama variable and $nama variable     | true jika kedua nya true (cuman ini beda sintak saja sama yyang sebelum nya)
//$nama variable || $nama variable      | true jika salah satu nya ada yang true
//$nama variable or $nama variable      | true jika salah satu nya ada yang true (cuman ini beda sintak saja sama yyang sebelum nya)
// ! $nama variable                     | true jika variable itu false, jadi sperti kebalikan nya
//$nama variable xor $nama variable     | true jika salah satu nya true, tapi jika kedua variable nya true maka di hutung false

$A = true;
$a = true;
$B = false;
$b = false;
var_dump ($A);
var_dump ($B);
var_dump ($a);
var_dump ($b);
echo"\n";
echo"Hasil :\n";
var_dump ($A && $a);
var_dump ($A and $a);
var_dump ($A || $B);
var_dump ($A or $B);
var_dump (!$b);
var_dump ($A xor $a);
var_dump ($A xor $B);

