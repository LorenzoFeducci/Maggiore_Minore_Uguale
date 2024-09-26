<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 25;
        $y = 15;
        $massimo;

        if($x > $y){
            echo "<h1>Maggiore</h1>";
            $massimo = $x;
        }else if($x == $y){
            echo "<h1>Uguale</h1>";
            $massimo = $x;
        }else{
            echo "<h1>Minore</h1>";
            $massimo = $y;
        }

        if($massimo < 10){
            echo "<p>$massimo . " minore di 10"</p>";
        } else if($massimo <= 20){
            echo "<p>$massimo . " compreso tra 10 e 20"</p>";
        } else if($massimo <= 30){
            echo "<p>$massimo . " compreso tra 20 e 30"</p>";
        }else{
            echo "<p>$massimo . " maggiore di 30"</p>";
        }
    ?>
</body>
</html>