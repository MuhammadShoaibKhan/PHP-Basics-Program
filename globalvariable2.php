<?php

$globalVar = "I am global";

function displayGlobal(){
    global $globalVar;
    echo "<p>globalVar</p>";
}

function modifyGlobal(){
    global $globalVar;
    $gloablVar = "I am globally modified";
}

displayGlobal();
modifyGlobal();
displayGlobal();


?>