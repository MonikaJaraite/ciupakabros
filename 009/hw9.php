<?php

// Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

$o = rand(0, 100);
$p = rand(0, 100);
$r = rand(0, 100);

echo "$o, $p, $r" . '<br>';

$suma = $o + $p + $r;

echo 'suma ' . $suma . '<br>';

$vidurkis = $suma / 3;

echo 'vidurkis ' . (round(($vidurkis), 0)) . '<br>';

$sumaB = 0;
$kintamujuSkaicius = 0;

if ($o < 10 && $o < 90) {
    $sumaB += $o;
}
if ($p < 10 && $o < 90) {
    $sumaB += $p;
}
if ($r < 10 && $o < 90) {
    $sumaB += $r;
}

if ($o < 10 && $o < 90) {
    $kintamujuSkaicius++;
}
if ($p < 10 && $o < 90) {
    $kintamujuSkaicius++;
}
if ($r < 10 && $o < 90) {
    $kintamujuSkaicius++;
} 
if ($kintamujuSkaicius == 0) {
    $kintamujuSkaicius = 1;
}

echo 'vidurkis atmetus ' . $sumaB / $kintamujuSkaicius;