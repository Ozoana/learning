<?php
//switch statement
//switch ini sama seperti if else, tapi beda nya adalah, if else biasa nya di gunakan unntuk sesuatu  yang kompleks
//sedangkan swicth ini biasa nya nya di gunakann perbandingan saja
//contoh nya

$nilai = "A";

switch ($nilai){
    case "A":
        echo "anda lulus dengan nilai A";
        break;
    case "B":
        echo "anda lulus dengan nilai B";
        break;
    case "C":
        echo "anda tidak lulus dengan nilai C";
        break;
    case "D":
        echo "anda tidak lulus dengan nilai D";
        break;
    default:
    echo "anda tidak sekolah";
}
//jika di variable nilai sama dengan A, maka case A yang akan muncul, dan jika B maka akan case B
//tapi jika tidak nilai maka akan memunculkan default