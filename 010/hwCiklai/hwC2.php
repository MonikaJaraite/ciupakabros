<?php

// Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.

$countLarge = 0;

for ($x = 1; $x <= 300; ++$x) {
    $rand = rand(0, 300);
    if ($rand > 275) {
        echo '<span style="color:crimson">' . $rand . '</span>' . ' ';
    } else {
        echo $rand . ' '; 
    }
    if ($rand > 150) {
        $countLarge++;
    }
}
echo '<br>' . 'Skaiciu, didesniu uz 150, yra: ' . $countLarge;

// echo '<br>' . $countLarge;