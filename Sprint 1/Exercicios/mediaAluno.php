<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media aluno</title>
</head>
<body>
    <?php 
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];

        $media = ($nota1 + $nota2 + $nota3)/3;
        $Resultado = ($media < 7)?"Recuperação!!":"Passou!!";
        echo "Suas notas foram | $nota1 | $nota2 | $nota3 |<br/>";
        echo $Resultado;

    ?>
</body>
</html>