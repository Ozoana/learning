<?php
 $nilai =  44 ;
switch (true) {
    case ($nilai >= 1 && $nilai <= 30):
        echo "Nilai C";
        break;

    case ($nilai > 30 && $nilai <= 60):
        echo "Nilai B";
        break;

    case ($nilai > 60 && $nilai <= 100):
        echo "Nilai A";
        break;

    default:
        echo "Nilai tidak valid";
}