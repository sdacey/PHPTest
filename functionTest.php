<?php
echo "<h1>Creating Functions</h1>";
echo "About to call the function... <br>";
echo "Calling the function... <br>";
display();
displayMessage("Hello there");
displaygreeting("Hello ", "Stanley");

function display(){
    echo "this text is displayed by the function";
}

function displayMessage($greeting){
    echo $greeting;
}

function displayGreeting($greeting, $name){
    echo $greeting." ".$name.", How are you?";
}