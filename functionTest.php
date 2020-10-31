<?php
echo "<h1>Creating Functions</h1>";
echo "About to call the functions... <br>";
echo "Calling the functions... <br>";
display();
echo "<br>";
displayMessage("Hello there");
echo "<br>";
displaygreeting("Hello ", "Stanley");
echo "<br>";
echo "Have called the functions.<br>";

function display(){
    echo "this text is displayed by the function";
}

function displayMessage($greeting){
    echo $greeting;
}

function displayGreeting($greeting, $name){
    echo $greeting." ".$name.", How are you?";
}