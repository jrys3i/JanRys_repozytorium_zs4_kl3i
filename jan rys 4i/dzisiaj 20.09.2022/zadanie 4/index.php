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
    <p>Podaj Rodzaj Działania: <br></br> dodawanie 1 <br></br>odejmowanie 2 <br></br> mnozenie 3 <br></br>dzielenie 4 <br></br> <input type="number" name="wprowadz" /></p>
    <input type="submit" value="przejdz">
    <p>Podaj A: <input type="number" name="a" /></p>
    <p>Podaj B: <input type="number" name="b" /></p>
    <input type="submit" value="Wykonaj">
    </form>
    <?php 
        $a = @$_POST['a'];
        $b = @$_POST['b'];
        $wprowadz = @$_POST['wprowadz'];
        $wynik;
        function dodawanie($a, $b){
            $a + $b = $wynik;
        }
        function odejmowanie($a, $b){
            $a - $b = $wynik;
            
        }
        function mnozenie($a, $b){
            $a * $b = $wynik;
            
        }
        function dzielenie($a, $b){
            $a / $b = $wynik;
        }
        

            switch($wprowadz){
                case 1 :
                   echo "dodawanie";
                   echo dodawanie($a, $b);
                   break;
                case 2 :
                    echo "odejmowanie";
                    break;
                case 3 :
                    echo "mnozenie";
                    break;
                case 4 :
                    echo "dzielenie";
                    break;

            }

        
        
    
    ?>
</body>
</html>