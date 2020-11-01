<?php
echo "<h1>Functions with Arrays</h1>";
echo "<h2>Calculating the Average</h2>";
$marks = array(80, 90, 40, 60, 70, 75, 50, 79);
$average = calcAverage($marks);
echo "The average is ".$average;

function calcAverage($array){
    $total = 0;
    $count = 0;
    foreach ($array as $value) {
        $total += $value;
        $count++;
    }
    $average = $total / $count;
    return $average;
}



