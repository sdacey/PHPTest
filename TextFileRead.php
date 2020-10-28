<?php
$file=fopen(‘TestTextFile.txt’,’r’);
//Output a line of the file until the end is reached
while ( !feof( $file ) ) {
    echo fgets( $file ) . "<br />";
}
fclose( $file );
