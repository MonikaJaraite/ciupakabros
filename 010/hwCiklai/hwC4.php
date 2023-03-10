<?php

// Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
//         * * * * * * * * * * *
//         * * * * * * * * * * *
//         * * * * * * * * * * *
//         * * * * * * * * * * *
//         * * * * * * * * * * *
//         * * * * * * * * * * *
//         * * * * * * * * * * *
//     Prieš tai nupieštam kvadratui nupieškite raudonas istrižaines.
// alternatyvus sprendimas

for($i = 1; $i < 11; $i++){
    for($j = 1; $j < 11; $j++){
     if($i == $j || ($i + $j) == 11){
         echo '<span style="color: red;"></span>'; 
     }else {
         echo '';
     }
 
    }
    echo '<br>';
 }