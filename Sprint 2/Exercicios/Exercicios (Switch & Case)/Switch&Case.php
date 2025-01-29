<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Switch&Case</title>
</head>
<body>
    <?php
        $nome = $_GET["nome"];
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "$nome, você nasceu em $a e vai fazer $i anos.</br>";
        switch ($i) {
          case $i >= 16 && $i < 18  : 
            echo "Não pode dirigir e o voto é opcional.";
            break;
          case $i >= 18 && $i<65:
            echo "Pode dirigir e o voto é obrigatorio.";
            break;
          case $i > 65:
            echo "Pode dirigir e o voto é opcional.";
            break;
          default:
            echo "Não pode dirigir e não pode votar.";
            break;
        }
    ?>
    </br><a href="Switch&Case.html">Voltar</a>
</body>
</html>