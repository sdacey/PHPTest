<?php
echo "<h1>Functions with Arrays</h1>";
$results = array(80, 90, 40, 60, 70, 75, 50, 79);
$sum = sum($results);
echo "The sum is ".$sum;
foreach ($results as $value) {
    echo "The result is ".$value."<br>";
}

function sum($array){
    $total = 0;
    foreach ($array as $value) {
        $total += $value;
    }
    for ($x = 0; $x <=7; $x++) {
        $array[$x] = 0;
    }
    foreach ($array as $value) {
        echo "Function value: ".$value."<br>";
    }
    return $total;
}


