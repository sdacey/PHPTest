<?php
$cars = array("Volvo", "BMW", "Toyota", "Mercedes", "Audi");
sort($cars);
foreach ($cars as $value) {
    echo "I like " . $value." <br>";
        }
echo sizeof($cars); // output number of elements in the array
?>
