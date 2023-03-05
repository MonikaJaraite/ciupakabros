<?php

// Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.

$a = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo $a . '<br>';

echo '<h1>' . substr($a, -14, 1) . '</h1>';