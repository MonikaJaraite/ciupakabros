<?php

// Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

$b = rand(3000, 4000);

for ($a = 1; $a <= $b; ++$a) {
    if (($a % 77 == 0)) {
        echo $a . ', ';
    }
}

// Kaip nuimti kableli po paskutinio skaiciaus?
// Eilute wraps itself, bet ar yra koks nors papildomas css variantas? wordwrap?