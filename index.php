<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primzahlen/Log Rechner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #F9F6EE" >
<div style="text-align: center; ">
    <form action="index.php">
        <br>
        <label for="number">Zahl, bis zu der alle Primzahlen ausgegeben werden: </label><br>
        <br>
        <input type="text" name="number" id="number" placeholder="0"><br>
        <br>
        <button type="submit">ausrechnen</button>
        <br><br>
        <br><br>
    </form>

</div>

</body>
</html>

<?php

//if number is set
if (isset($_REQUEST['number'])) {

    //parse string to int
    $number = (int)$_REQUEST['number'];

    echo "Die Primzahlen von 0 bis " . $number . " lauten: <br><br>";
    //go from 1 to $number and check if number is prime
    for ($k = 1; $k < $number; $k++) {
        //if number is prime --> print
        if(isPrime($k))
        echo $k."<br>";
    }

}

function isPrime($number)
{
    //Check if number is 1 or 0
    if ($number == 1 || $number == 0 || $number < 0) {  //NUR Menge der N-Zahlen!
        //echo $number . " is not a prime";
        return false;
    }

    //check if number is dividable by (starting at) 2. (and then 3, 4, etc.)
    for ($l = 2; $l < $number; $l++) { //Hier bis n-1
        //if division is possible (meaning result of mod is 0), it's not a prime number anymore
        if ($number % $l == 0) {
            //echo $number . " is not a prime";
            return false;
        }
    }
    //If number is not dividable by anything (but 1 and itself):
    //echo $number . " is a prime <br>";
    return true;

}

echo "<br> <p> Log von 0 bis 100: </p> ";
//Log
for ($i = 1; $i < 100; $i++) {
    //get log from $i, multiply it by 10 and round the number to a whole integer
    $asterisks_to_print = round(log($i) * 10);
    //now print asterisks from 0 to integer number from above

    for ($j = 0; $j < $asterisks_to_print; $j++) {
        echo "*";
    }
    echo "<br>";
}

