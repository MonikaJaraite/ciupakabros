<?php

// Naudodamiesi 1 uždavinio masyvu:
// a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
// c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
// d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

$arr = [];

for ($i=0; $i <=29; ++$i) {
    $rand = rand(5, 25);
    array_push($arr, $rand);
}

echo '<pre>';

print_r($arr);

//-------------------------- a)

$count = 0;

foreach ($arr as $value) {
    if ($value > 10) {
        $count++;
    }    
}

echo 'Masyve reikšmių didesnių už 10 yra: ' . $count . '<br>';

//b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;

echo 'Didžiausia reikšmė yra: ' . max($arr) . ' ir jos indeksai yra: ' . implode(',', array_keys($arr, max($arr))) . '<br>';

// c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;

$sum = 0;

foreach (range(0, 28, 2) as $index) {
    $sum += $arr[$index];
}
echo 'Visų porinių (lyginių) indeksų reikšmių suma: ' . $sum . '<br>';

// d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

$new = [];

foreach ($arr as $key => $value) {
    $new[] = $value - $key;
}
print_r($new);

// e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

for ($i=0; $i <=9; ++$i) {
    $rand = rand(5, 25);
    array_push($arr, $rand);
}

print_r($arr);

// f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

$a = [];
$b = [];

foreach ($arr as $key => $value) {
    if ($key % 2 == 1) {
        array_push($a, $value);
    } else {
        array_push($b, $value);
    }
}

print_r($a);
print_r($b);