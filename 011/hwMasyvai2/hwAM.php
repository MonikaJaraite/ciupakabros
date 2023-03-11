<?php

// 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų su reikšmėmis nuo 5 iki 25.


$arr1 = [];

foreach (range(1, 10) as $i) {
    $arr = [];        // cia nusinulins $arr (jei sita eilute bus 5-toje, neissivalys masyvas)
    foreach (range(1, 5) as $j) {
        $rand = rand(5, 25);
        $arr[] = $rand;
    } 
    $arr1[] = $arr;
}

echo '<pre>';
print_r($arr1);
echo '<br>';

// 2. Naudodamiesi 1 uždavinio masyvu:
// a) Suskaičiuokite kiek masyve yra elementų didesnių už 10;
// b) Raskite didžiausio elemento reikšmę;

$count = 0;
$max = 0;

foreach ($arr1 as $value) {
    foreach ($value as $value2) {
        if($value2 > 10) {
            $count++;
        }
        if ($value2 > $max) {
            $max = $value2;
        }
    }
}     

echo 'Masyve elementu didesniu uz 10 yra: ' . $count++ . '<br>';
echo 'Didziausio elemento reiksme: ' . $max . '<br>';

// echo 'Didziausio elemento reiksme masyve: ' . (max($arr1));   - veikia tik su vienamciais masyvais   

// c) Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas (t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)

$sums = [0, 0, 0, 0, 0];

// foreach ($arr1 as $value) {
//     foreach (range(0, 4) as $i) {
//         $sums[$i] += $value[$i];
//     }
// }

foreach ($arr1 as $value) {
    foreach ($value as $key => $value1) {
        $sums[$key] += $value1;
    }
}

echo 'Kiekvieno antro lygio masyvų su vienodais indeksais sumos: ' . '<br>';
// print_r($sums);

// d) Visus antro lygio masyvus “pailginkite” iki 7 elementų

foreach($arr1 as &$value) {
    while(count($value) < 7) {
        $value[] = rand(5, 25);
    }
}

echo 'Pailgintas masyvas: ' . '<br>';
print_r($arr1);
// print_r($arr1);

// e) Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai

$arr5 = [];

foreach($arr1 as &$value) {
    $arr5[] = array_sum($value);
}

echo 'e): ';
print_r($arr1);
print_r($arr5);

$arr6 = [];

foreach($arr1 as &$value) {
    $sum = 0;
    foreach($value as $i) {
        $sum += $i;
    }
    $arr6[] = $sum;
}

echo 'arr6: ';
print_r($arr6);