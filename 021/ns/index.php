
<?php
use Ievos\Pievos\Read;
use Petro\Read as PR;

require __DIR__ . '/vendor/autoload.php';

// spl_autoload_register(function ($class) {
//     echo '<h3>R - 1 '. $class .'<h3>';
//     require_once __DIR__ . 'Ievos/Pievos/Read.php';
// })

$stock = new Read;
$cosmos = new PR;

$stock->getData();
$cosmos->getData();