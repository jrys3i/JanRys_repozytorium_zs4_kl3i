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
        $a = 10;
        $sil = 1;
        for($i=1; $i<=$a; $i++){
            $sil *=$i;
        }
        echo($a != $sil);

    ?>
</body>
</html>