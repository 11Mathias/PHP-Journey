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
        
        switch ($a) {
          case $a == 16 && $a < 18: 
            echo "Não pode dirigir e o voto é opcional";
            break;
        }
    ?>
</body>
</html>