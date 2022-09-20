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
        $x = 100;
        $y = 60;
        $a = $x;
        $b = $y;

        while($a!=$b){
            if ($a < $b) {
                $dz = $a; 
                $a = $b; 
                $b = $dz;
              }
              $a = $a - $b;
              $NWW = ($x * $y) / $a;
            }
        echo ($NWW);
    ?>
</body>
</html>