<?php

function timelessEcho(){

    static $timelessVar = 0;

    echo "<p>Timeless Echo: $timelessVar</p>";
    $timelessVar++;


}
timelessEcho();
timelessEcho();
timelessEcho();



?>