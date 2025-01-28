<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>If & Else Exercise 1</title>
</head>
<body>
  <?php
   $nome = $_GET["nome"];
   $idade = $_GET["idade"];

   //Se for maior que 18
    if($idade >= 18){ 
      $cabare = true;
      echo "Cabarezinho liberado $nome!!";
    //Se for menor 
    }else{
      $cabare = false;
      echo "Cabare fechado $nome";   
    }
  ?>
</body>
</html>