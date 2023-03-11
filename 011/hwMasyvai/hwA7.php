<?php

echo '<pre>';

// 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).

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

echo 'Du masyvai, kuriu reiksmes atsitiktines ir nesikartojancios masyve: ' . '<br>';

print_r($arr8);
print_r($arr9);

// 7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.

$arr1 = [];

foreach ($arr8 as $value8) {
    if (!in_array($value8, $arr9)) {
        $arr1[] = $value8;
    }
}

echo '7. Masyvas, kurio reiksmes yra is pirmojo masyvo, bet kuriu nera antrame masyve: ' . '<br>';

print_r($arr1);         
echo '<br>';

// 8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.

foreach ($arr8 as $value8) {
    if (in_array($value8, $arr9)) {
        $arr1[] = $value8;
    }
}

echo '8. Masyvas iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose: ' . '<br>';

print_r($arr1);
echo '<br>';

// 9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.

$arr2 = array_combine($arr8, $arr9);

echo '9. Masyvas, kurio indeksus sudaro pirmo masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo: ' . '<br>';
print_r($arr2);

// 10. Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas - antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.

$arr3 = [];

while (count($arr3) <= 10) {
    $rand = rand(5, 25);
    if (count($arr3) < 2) {
        $arr3[] = $rand;
    } else {
        $arr3[] = ($arr3[(count($arr3) - 1)]) + ($arr3[(count($arr3) - 2)]);
    }
}           

// ARBA:

$arr4 = [];

foreach (range(0, 9) as $i) {
    if($i < 2) {
        $arr4[] = rand(5, 25);
    } else {
        $arr4[] = $arr4[$i-1] + $arr4[$i-2];
    }
}

echo '10. Masyvas, kurio du pirmi skaiciai atsitiktiniai nuo 5 iki 25, o likusieji pries ji einanciu dvieju suma: ' . '<br>';

print_r($arr4);