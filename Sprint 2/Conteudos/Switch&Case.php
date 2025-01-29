<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch&Case</title>
</head>
<body>
    <?php

        $a = $_GET["ano"];
        //escolha ($a)
        switch ($a) {
          //caso 1
          case $a == 16 && $a < 18: 
            //se esse caso for verdadeiro vai imprimir essa mensagem e parar
            echo "Não pode dirigir e o voto é opcional";
            break;
          
          //se nenhum caso for verdadeiro vai cair no "default"
          default:
            break;
        }
    ?>
</body>
</html>