<?php

// 9. Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek).

session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $_SESSION['number'] = count($_POST['number'] ?? []);
    header('Location: http://localhost/ciupakabros/016/u9.php');
    die;
}

if (isset($_SESSION['number'])) {
    $number = $_SESSION['number'];
    unset($_SESSION['number']);
}

$letters = range('A', 'J');

$color = isset($number) ? 'white' : 'black';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background: <?= $color ?>">

    <?php if(isset($number)) : ?>

        <h1><?= $number ?></h1>
        <a href="http://localhost/ciupakabros/016/u9.php">BACK</a>

    <?php else : ?>

    <form method="post">
        <?php foreach(range(0, rand(2, 9)) as $number) : ?>
            <input type="checkbox" name="number[]"><label style="color:crimson;"><?= $letters[$number] ?></label>
        <?php endforeach ?>
        <button type="submit">POST</button>
    </form>

    <?php endif ?>

</body>

</html>