<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>
<body>
    <?php
        $a = 10;
        $b = 5;

        //Maior e menor que
        $a > $b;
        $a < $b;

        //Maior ou igual e menor ou igual
        $a >= $b;
        $a <= $b;

        //Diferente
        $a != $b;
        $a <> $b;

        //igual 
        $a == $b;

        //Idêntico (Verifica se o valor é igual e se é do memso tipo)
        $a === $b;

        //Operador Unário
        //expressão ? verdadeiro : falso
        $a < $b ? print "Menor" : print "Maior";
    ?>
</body>
</html>