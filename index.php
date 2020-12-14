<?php

$presentTime = new DateTime();
$destinationTime = new DateTime('13 Jul 2030 11:23');
$interval = $presentTime->diff($destinationTime);

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>PRESENT TIME</h1>
<form action="">
<div class="container">
    <div class="row">
    <label for="month"><p>MONTH</p>
        <input type="text" class="present" name="month" id="month" value="<?= $presentTime->format('M') ?>"</label>
    </div>
    <div class="row">
    <label for="month"><p>DAYS</p>
        <input type="text" class="present" name="month" id="month" value="<?= $presentTime->format('d') ?>"</label>
    </div>
    <div class="row">
    <label for="month"><p>YEAR</p>
        <input type="text" class="present" name="month" id="month" value="<?= $presentTime->format('Y') ?>"</label>
    </div>
    <div class="row">
    <label for="month"><p>AM/PM</p>
        <input type="text" class="present" name="month" id="month" value="<?= $presentTime->format('A') ?>"</label>
    </div>
    <div class="row">
    <label for="month"><p>HOUR</p>
        <input type="text" class="present" name="month" id="month" value="<?= $presentTime->format('H') ?>"</label>
    </div>
    <div class="row">
    <label for="month"><p>MIN</p>
        <input type="text" class="present" name="month" id="month" value="<?= $presentTime->format('i') ?>"</label>
        </div>
</div>
</form>

<h1>DESTINATION TIME</h1>
<form action="">
    <div class="container">
        <div class="row">
            <label for="month"><p>MONTH</p>
                <input type="text" class="future" name="month" id="month" value="<?= $destinationTime->format('M') ?>"</label>
        </div>
        <div class="row">
            <label for="month"><p>DAYS</p>
                <input type="text" class="future" name="month" id="month" value="<?= $destinationTime->format('d') ?>"</label>
        </div>
        <div class="row">
            <label for="month"><p>YEAR</p>
                <input type="text" class="future" name="month" id="month" value="<?= $destinationTime->format('Y') ?>"</label>
        </div>
        <div class="row">
            <label for="month"><p>AM/PM</p>
                <input type="text" class="future" name="month" id="month" value="<?= $destinationTime->format('A') ?>"</label>
        </div>
        <div class="row">
            <label for="month"><p>HOUR</p>
                <input type="text" class="future" name="month" id="month" value="<?= $destinationTime->format('H') ?>"</label>
        </div>
        <div class="row">
            <label for="month"><p>MIN</p>
                <input type="text" class="future" name="month" id="month" value="<?= $destinationTime->format('i') ?>"</label>
        </div>
    </div>
</form>

<?php
echo'<br>';
echo $interval->format('Il y a %Y ans %M mois %D jours %H heures et %i minutes avant la destination finale.');
?>
</body>
</html>