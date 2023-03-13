<?php

// 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. 

echo '<pre>';

$arr = [];

foreach(range(1, 10) as $value) {
    $temp = [];
    foreach(range(1, rand(2, 20)) as $i) {
        $temp[] = chr(rand(65, 90));
    }
    $arr[] = $temp;
}

echo 'Masyvas su atsitiktiniu skaiciumi raidziu submasyvuose:  <br>';
print_r($arr);

// Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

foreach($arr as &$value) {
    sort($value);
}

unset($value);
echo 'Antro lygio masyvai isrusiuoti pagal abecele: <br>';
print_r($arr);

// 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada būtų didžiojo masyvo visai pradžioje.

$arrK = [];
$arrWithoutK = [];

foreach($arr as $value) {
    foreach ($value as $i) {
        if ($i == 'K' && !in_array($value, $arrK)) {
            $arrK[] = $value;
        } elseif (!in_array($value, $arrWithoutK)) {
           $arrWithoutK[] = $value; // ITRAUKIA 10 SUBMASYVU - PERDAUG
        }
    }
}

while ($arr < (10 - count($arrK))) {
    
}

$lengths = [];

foreach($arrWithoutK as $key => $value) {
    $lengths[] = count($value);
}

echo 'Masyvai, kurie turi bent vieną “K” raidę: <br>';
print_r($arrK);

echo 'Masyvai, kurie neturi “K” raidziu: <br>';
print_r($arrWithoutK);

echo 'Masyvu ilgiai: <br>';
print_r($lengths);

array_multisort($lengths, $arrWithoutK);

echo 'Submasyvai, isrusiuoti pagal ilgi didejimo tvarka: <br>';
print_r($arrWithoutK);