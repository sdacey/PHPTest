<?php
echo "<h1>Write an Array to a File</h1>";
$cars = array("Volvo", "BMW", "Toyota", "Mercedes", "Audi");
$file = fopen("CarsText.txt", "w") ;
foreach ($cars as $value) {
    echo "I like " . $value." <br>";
    $text = $value."\n";
    if (fwrite($file, $text) == FALSE) {
       echo ("cannot write to Cars.txt");
    }
}
fclose($file);
echo "Finished";
?>

