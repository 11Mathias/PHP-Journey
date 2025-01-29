<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>While Exercise 1</title>
</head>
<body>
    <?php
        $c = 1;
        while ($c <= 10) {
          echo "Valor 1: <input type='number' name='v1' max='100' min='0' value='0'><br/>";
          $c++;
        }
    ?>
</body>
</html>