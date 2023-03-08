<?php

// 1. Naršyklėje nupieškite linija iš 400 “*”. 
//  a) Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
//  b) Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; 

$a = '*';
$b = str_repeat($a, 400);
echo '<h1 style="overflow-wrap: break-word">' . $b . '</h1>' . '<br>';

$c = wordwrap($b, 50, "<br>\n", TRUE);

echo $c;

// str_repeat = po kapotu tas pats for'as