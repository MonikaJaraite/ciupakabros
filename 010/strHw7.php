<?php

// Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.

$kint = 'An American in Paris';
$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", $kint);

echo $onlyconsonants . '<br>';

$b = "Breakfast at Tiffany's";
$a = '2001: A Space Odyssey';
$i = "It's a Wonderful Life";
