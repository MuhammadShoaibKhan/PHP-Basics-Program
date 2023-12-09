<?php

$x = 10;
$y = 20;

function myText(){
    global $x, $y;
    $y = $x + $y;
}

myText();
echo $y;


?>