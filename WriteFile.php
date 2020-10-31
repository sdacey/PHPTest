<?php
echo "<h1>Write File</h1>";
$file = fopen("WriteText.txt", "w") ;
$text = "Here are\nthree lines\nof text.";
if (fwrite($file, $text) == FALSE) {
    echo ("cannot write to WriteText.txt");
}
else
    {
    echo "Created WriteText.txt";
}
fclose($file);
?>
