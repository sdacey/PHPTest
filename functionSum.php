<?php
echo "<h1>Functions with Arrays</h1>";
$marks = array(80, 90, 40, 60, 70, 75, 50, 79);
$sum = sum(marks);
echo "The sum is ".$sum;

function sum($array){
    $total = 0;
    foreach ($array as $value) {
        $total += $value;
    }
    return $total;
}

function displayMessage($greeting){
    echo $greeting;
}

function displayGreeting($greeting, $name){
    echo $greeting." ".$name.", How are you?";
}
