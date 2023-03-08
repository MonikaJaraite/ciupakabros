<?php

// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$arr = [];

for ($i=0; $i <=29; ++$i) {
    array_push($arr, rand(5, 25));
}

echo '<pre>';

print_r($arr);

echo '<br>';

// 3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

$arr3 = [];

for ($i=1; $i <=200; ++$i) {
    array_push($arr3, chr(rand(65, 68)));
}

print_r(array_count_values($arr3));