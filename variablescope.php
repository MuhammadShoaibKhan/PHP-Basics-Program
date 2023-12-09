<?php

$globalVar = "I am global";

function displayGlobal(){
    global $globalVar;
    echo "<p>globalVar.</p>";
}

displayGlobal();

function localScope(){
    $localVar = " I am Local";
    echo "<p>$localVar</p>";
}

localScope();


?>