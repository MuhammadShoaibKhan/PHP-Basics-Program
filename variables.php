<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    $name = "Wizard";
    $age = 100;

    echo "<p>Hello, $name! you are $age years old. </p>";

    $isWizard = true;
    $magicLevel = 8.5;

    echo "<p>Am I a Wizard?  " .($isWizard ? "Yes" : "No" ) . "</p>";
    echo "<p>My magic level is: $magicLevel</p>";

    $greetings = "Greeting  ";
    $greetings .= "Magical Begining!";

    echo "<p>$greetings</p>"




    ?>

    
</body>
</html>