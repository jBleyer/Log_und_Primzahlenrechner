<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primzahlen/Log Rechner</title>
</head>
<body>

</body>
</html>

<?php

for ($i = 1; $i < 100; $i++) {
    $asterisks_to_print = round(log($i) * 10);
    for ($j = 0; $j < $asterisks_to_print; $j++) {
        echo "*";
    }
    echo "<br>";
}