<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
      $nome = $_GET["nome"];
      $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
      $i = date("Y") - $a;
      echo "$nome, você nasceu em $a e tem $i anos";
      if (($i >= 16 && $i <= 18 ) || ($i>65)) {
        $tipoVoto = "</br>O voto é opcional";
        echo $tipoVoto;
      }elseif ($i >= 18) {
        $tipoVoto = "</br>O voto é obrigatorio";
        echo $tipoVoto;
      }
    
  ?>
</body>
</html>