<?php
$fileName = $_GET["filename"];
echo "<h1>Read File</h1>";
$file=fopen($fileName,'r');
if ($file)
    {while ( !feof( $file ) ) {
      echo fgets( $file ) . "<br />";
    }
    fclose( $file );}
else
{
    echo "File does not exist";
}
//Output a line of the file until the end is reached

