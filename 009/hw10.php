<?php

// Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

$val = rand(0, 23);
$min = rand(0, 59);
$sek = rand(0, 59);

echo 'Pradinis laikrodis: ' . $val . ' : ' . $min . ' : ' . $sek . '<br>';

$pS = rand(0, 300);           //papildomos sekundes

echo 'Pridedamos sekundes: ' . $pS . '<br>';

$papM = floor($pS / 60);      //gaunasi papildomu minuciu pridejimui prie laikrodzio
$papS = $pS % 60;             //gaunasi papildomu sekundziu pridejimui prie laikrodzio

echo 'Papildoma minutemis: ' . $papM . '<br>';
echo 'Papildoma sekundemis: ' . $papS . '<br>';

$min += $papM;
$sek += $papS;

if($sek > 59) {
    $sek -= 60;
    ++$min;
}
if($min > 59) {
    $min -= 60;
    ++$val;
}

echo 'Laikrodis, pridejus papildomas sekundes: ' . $val . ' : ' . $min . ' : ' . $sek;