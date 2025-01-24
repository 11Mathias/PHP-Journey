<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais Exercicio</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo  = $_GET["op"];

        echo "Os valores passados foram $n1 e $n2 <br/>";
        $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
        echo "O resultado será $r";

        //igual e idÊntica
        $a = 10;
        $b = "10";
        $r = ($a === $b) ? "sim" : "não";
        echo "<br/>As variaveis A e B são iguais? <br/> $r";

        
    ?>
</body>
</html>