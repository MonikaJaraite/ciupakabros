<?php

// Parašyti kodą, kuris generuotų atsitiktinį stringą iš lotyniškų mažųjų raidžių. Stringo ilgis 3 simboliai.

$characters = 'abcdefghijklmnopqrstuvwxyz';
$randomString = '';

for ($i = 0; $i < 3; $i++) {
    $randomString .= $characters[rand(0, strlen($characters) - 1)];
}

echo $randomString;

echo '<br>';

$randStr = '';

for ($i = 0; $i < 3; $i++) {
    $randStr .= chr(rand(97, 122));
}

echo $randStr;
