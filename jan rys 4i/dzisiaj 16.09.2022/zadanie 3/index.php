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
        $a = 100;
        $b = 60;

        while($a!=$b){
            if ($a < $b) {
                $dz = $a; 
                $a = $b; 
                $b = $dz;
              }
              $a = $a - $b;
            }
        echo ($a);
    ?>
</body>
</html>