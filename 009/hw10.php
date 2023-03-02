<?php

// Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

$val = rand(0, 23);
$min = rand(0, 59);
$sek = rand(0, 59);

echo 'Pradinis laikrodis: ' . $val . ' : ' . $min . ' : ' . $sek . '<br>';

$pS = rand(0, 300);                     //papildomos sekundes

echo $pS . '<br>';

$papM = (round(($pS / 60), 0));          //gaunasi papildomu minuciu pridejimui prie laikrodzio
$papS = ($pS - $papM * 60);              //gaunasi papildomu sekundziu pridejimui prie laikrodzio

$tikrosVal = $val;
$tikrosMin = $min;
$tikrosSek = $sek;

if ($sek + $papS <= 59) {
    $tikrosSek = ($sek += $papS);
} elseif ($sek + $papS >= 60) {
    $tikrosSek = ($sek + $papS - 60);
    $tikrosMin = ++$min;
}

if ($min + $papM <= 59) {
    $tikrosMin = ($min += $papM);
} elseif ($min + $papM >= 60) {
    $tikrosMin = ($min + $papM - 60);
    $tikrosVal = ++$val;
}

echo 'Laikrodis, pridejus papildomas sekundes: ' . $tikrosVal . ' : ' . $tikrosMin . ' : ' . $tikrosSek;