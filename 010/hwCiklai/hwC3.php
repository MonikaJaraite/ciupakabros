<?php

// Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

$b = rand(3000, 4000);

// for ($a = 1; $a <= $b; ++$a) {
//     if (($a % 77 == 0)) {
//         echo $a . ', ';
//     }
// }

for ($a = 77; $a <= $b; $a+=77) {
    if ($a !=77) {
        echo ', ' . $a;
    } else echo $a;
}

echo '<br>';

$str = '';

for ($a = 1; $a <= $b; ++$a) {
    if (($a % 77 == 0)) {
        $str .= $a . ', ';
    }
} 

echo substr($str, 0, -2);