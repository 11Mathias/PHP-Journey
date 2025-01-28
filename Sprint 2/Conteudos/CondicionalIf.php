<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicional If</title>
</head>
<body>
  <?php
      $a = $_GET["a"];
      $b = $_GET["b"];
      
       if ($a < $b) {
        echo "genio";
       } else {
        echo "burro";
       }
  ?>
</body>
</html>