<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <p>Podaj A: <input type="number" name="a" /></p>
    <p>Podaj B: <input type="number" name="b" /></p>
    <p>Podaj C: <input type="number" name="c" /></p>
    <input type="submit" value="Wykonaj">
    </form>
    <?php 
        $a = @$_POST['a'];
        $b = @$_POST['b'];
        $c = @$_POST['c'];
        function pitagoras($a, $b, $c){
            
            if($a*$a+$b*$b==$c*$c){
                return 1;
            }
            else{
                return 0;
            }
        }
           echo pitagoras($a, $b, $c);
        
    
    ?>
</body>
</html>