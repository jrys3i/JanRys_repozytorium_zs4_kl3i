<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($x=1; $x<10; $x++) {
            echo " * " ;
        }
        echo "</br>";
        for ($i=0; $i<1; $i++) {
            echo "*" ;
            for ($z=0; $z<2*$x+2; $z++)
            echo "&nbsp"; 
            echo "*";
        }
        echo "</br>";
        for ($i=0; $i<1; $i++) {
            echo "*" ;
            for ($e=0; $e<2*$x+2; $e++)
            echo "&nbsp"; 
            echo "*";
        }
        echo "</br>";
        for ($j=0; $j<9; $j++) {
            echo " * " ;
        }
    ?>
</body>
</html>