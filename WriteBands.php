<?php
echo "<h1>Write an Array to a File</h1>";
$bands = array("Black Sabbath", "Blue Oyster Cult", "Blues Explosion", "White Stripes", "Black Seeds", "Black Keys", "Led Zeppelin", "Rush" );
$file = fopen("BandsText.txt", "w") ;
foreach ($bands as $value) {
    echo "Writing " . $value." <br>";
    $text = $value."\n";
    if (fwrite($file, $text) == FALSE) {
        echo ("cannot write to BandsText.txt");
    }
}
fclose($file);
echo "Finished";
?>

