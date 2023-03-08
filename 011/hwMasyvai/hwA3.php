<?php

// Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

$arr = [];

for ($i=A; $i <=D; ++$i) {
    $rand = rand(5, 25);
    array_push($arr, $rand);
}