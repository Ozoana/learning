<?php

//misal ada nilai yang bisa di bagi 2 maka akan prin halo

$nilai = [10,9,8,7,6,5,4,3,2,1];

foreach($nilai as $A){
    if ($A % 2 == 0){
        echo "nilai yang bisa dibagi 2 adalah : $A\n";
    }elseif ($A % 3 == 0){
        echo " nilai yang bisa di bagi 3 adalah : $A\n";
    } elseif ($A % 4 == 0){
        echo "nilai yang bisa di bagi 4 adalah : $A\n";
    } else {
        echo "tidak ada nomor yang bisa di bagi \n";
    }
}