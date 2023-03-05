<?php

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$name = 'Goldie';
$surname = 'Hawn';
$lastThree = substr($name, -3, 3) . substr($surname, -3, 3);

echo $lastThree;