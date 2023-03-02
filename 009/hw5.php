<?php

// 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

$k1 = rand(0, 2);
$k2 = rand(0, 2);
$k3 = rand(0, 2);
$k4 = rand(0, 2);

echo "$k1, $k2, $k3, $k4";

$nuliai = 0;
$vienetai = 0;
$dvejetai = 0;

if ($k1 == 0) {
    $nuliai++;
}
if ($k2 == 0) {
    $nuliai++;
}
if ($k3 == 0) {
    $nuliai++;
}
if ($k4 == 0) {
    $nuliai++;
}
if ($k1 == 1) {
    $vienetai++;
}
if ($k2 == 1) {
    $vienetai++;
}
if ($k3 == 1) {
    $vienetai++;
}
if ($k4 == 1) {
    $vienetai++;
}
if ($k1 == 2) {
    $dvejetai++;
}
if ($k2 == 2) {
    $dvejetai++;
}
if ($k3 == 2) {
    $dvejetai++;
}
if ($k4 == 2) {
    $dvejetai++;
}

echo '<br>';

echo 'nuliu: ' . $nuliai . ' vienetu: ' . $vienetai . ' dvejetu: ' . $dvejetai;