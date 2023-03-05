<?php

// Papildomas.
// Parašykite kodą, kuris generuotų atsitiktinį stringą su 10 atsitiktine tvarka išdėliotų žodžių, o žodžius generavimui imtų iš 9-me uždavinyje pateiktų dviejų stringų. Žodžiai neturi kartotis. (reikės masyvo)

$d = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$t = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

$bendras = 
$d . ' ' . $t . '<br>';

echo $bendras;

// $randWord = array_rand($bendr , 2);

// echo $randWord;