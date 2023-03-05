<?php

// Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.

$kint = 'An American in Paris';
$A = substr_count($kint, 'A');
$a = substr_count($kint, 'a');

echo $A + $a;