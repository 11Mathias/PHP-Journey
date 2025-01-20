<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <?php
        //funções matematicas 
        $A = $_GET["a"];
        $B = $_GET["b"];
        echo "Valores recebidos, $A e $B";

        //Absoluto
        echo "<br/>O valor absoluto de $A é " . abs($A);

        //Potencia
        echo "<br/>A potencia de $A<sup>$A</sup> é " . pow($A, $A);

        //Raiz Quadrada
        echo "<br/>A raiz de $A é " . sqrt($A);

        //Arredondamento
        echo "<br/>Arredondando $B fica " . round($B);

        ?>
    </div>
</body>

</html>