<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do While Exercises</title>
</head>
<body>
    <?php
        $v = isset($_GET["Val"]) ? $_GET["Val"]:1; 
        $c = $v;
        $fat = 1;
        do{
            $fat = $fat * $c;
            $c--;
        } while($c >= 1);
        echo "<h2>$v! = $fat</h2>";
    ?>
</body>
</html>