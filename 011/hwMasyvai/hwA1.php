<?php

// Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$arr = [];

for ($i=0; $i <=29; ++$i) {
    array_push($arr, rand(5, 25));
}

echo '<pre>';

print_r($arr);