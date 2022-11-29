<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
</head>
<body>
    <h1>OOP</h1>

    <?php 
    include "./Coin.php"; 
    
        $moneta = new Coin();
        print_r($moneta);
        $moneta1 = new Coin();
        print_r($moneta1);
        $moneta2 = new Coin();
        print_r($moneta2);
        $moneta3 = new Coin();
        print_r($moneta3);
        $moneta4 = new Coin();
        print_r($moneta4);

        $monetos = [$moneta, $moneta1, $moneta2, $moneta3, $moneta4];
        echo "<hr>";
        
        echo "<br>";
       
        
       
        echo "<br>";
        
        $moneta->setInfo("Grašis", "Italija", 10, "1172m", "sidabras");
        echo "<br>";
        $moneta1->setInfo("Bacenas", "Šveicarija", 5, "XVa", "sidabras");
        echo "<br>";
        $moneta2->setInfo("Karolas", "Anglija", 8, "1800m", "auksas");
        echo "<br>";
        $moneta3->setInfo("Skudas", "Italija", 6, "1551m", "auksas");
        echo "<br>";
        $moneta4->setInfo("Obolas", "Graikija", "1/6 drachmos", "seniai seniai", "sidabras");
        echo "<br>";
        print_r($monetos);
        
    ?>
</body>
</html>