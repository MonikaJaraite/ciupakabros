<?php

// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$arr = [];

for ($i=0; $i <=29; ++$i) {
    array_push($arr, rand(5, 25));
}

echo '<pre>';

print_r($arr);

echo '<br>';

// // 3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

$arr3 = [];

for ($i=1; $i <=200; ++$i) {
    array_push($arr3, chr(rand(65, 68)));
}

print_r(array_count_values($arr3));

// // 4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.

sort($arr3);
foreach ($arr3 as $val) {   
}
echo 'Isrusiuota pagal abecele: ';
print_r($arr3);

// // 5. Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.

$arr4 = [];
$arr5 = [];
$arr6 = [];

for ($i=1; $i <=200; ++$i) {
    array_push($arr4, chr(rand(65, 68)));
    array_push($arr5, chr(rand(65, 68)));
    array_push($arr6, chr(rand(65, 68)));
}

for ($i = 0; $i < 200; ++$i) {
    $arr7[] = $arr4[$i] . $arr5[$i] . $arr6[$i];
  }

print_r($arr7);

echo 'Unikaliu kombinaciju yra: ' . count(array_unique($arr7)) . '<br>';

$arr2 = array_count_values($arr7);

print_r($arr2);

$arr10 = [];

foreach ($arr2 as $key => $value) {
    if ($value == 1) {
        array_push($arr10, $key);
    }
}

print_r($arr10);

echo 'Unikaliu reiksmiu yra: ' . count($arr10) . '<br>';

// // 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).

$arr8 = [];
$arr9 = [];

for ($i=1; $i <= 100; ++$i) {
    $rand = rand(100, 999);
    if (!in_array($rand, $arr8)) {
        $arr8[] = $rand;
    } else {
        --$i;   // grazink per viena $i ir daryk is naujo
    }
}

while (count($arr9) < 100) {
    $rand = rand(100, 999);
    if (!in_array($rand, $arr9)) {
        $arr9[] = $rand;
    }
}

// sort($arr8);
// sort($arr9);

print_r($arr8);
print_r($arr9);