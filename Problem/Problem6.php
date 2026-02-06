<?php

function fakto($n){
    $c = 1;
   for($a = 1; $a<=$n; $a ++){
        $c *= $a;
   }
   echo $c;
}

fakto (3);

