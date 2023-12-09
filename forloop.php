<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $name = "CodeExplorer";
    $age = 30;

    if($age >= 10){
        echo "<p>Welcome, $name! you are eligible. </p>";
    }
    else{
        echo "<p>Sorry, $name! you are not eligible. </p>";
    }

    echo "<ul>";
    for($i=1; $i <=5; $i++){
        echo "<li> Item $i </li>";
    }
    echo "</ul>"
    

    ?>


</body>
</html>