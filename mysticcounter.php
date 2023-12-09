<?php

function mysticcounter(){
    static $count = 0;
    $count++;
    echo "<p>Mystic Power Activated: $count </p>";
}

mysticcounter();
mysticcounter();
mysticcounter();

?>