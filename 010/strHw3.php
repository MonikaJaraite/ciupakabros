<?php

// Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.

$name = 'Goldie';
$surname = 'Hawn';
$initials = substr($name, 0, 1) . substr($surname, 0, 1);

echo $initials;