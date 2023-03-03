<?php

$name = 'Goldie';
$surname = 'Hawn';

echo $name . ' ' . strlen($name) . ', ' .  $surname . ' ' . strlen($surname) . '<br>';

if (strlen($name) > strlen($surname)) {
    echo $name . ' ' . strlen($name) . '<br>';
} elseif (strlen($surname) > strlen($name)) {
    echo $surname . ' ' . strlen($surname) . '<br>';
}