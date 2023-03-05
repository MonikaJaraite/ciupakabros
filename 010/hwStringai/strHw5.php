<?php

// Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti.

$kint = 'An American in Paris';
$new = str_replace('a', '*', $kint);
$newer = str_replace('A', '*', $new);

echo $newer;