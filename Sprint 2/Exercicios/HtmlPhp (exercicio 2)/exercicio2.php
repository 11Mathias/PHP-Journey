<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //"isset" ->  se foi setado (is set)
        $nome = isset( $_GET["nome"] ) ? $_GET["nome"] :  "[Não foi informado]";
        $ano = isset( $_GET["ano"] ) ? $_GET["ano"] :  0;
        $sexo = isset( $_GET["sexo"] ) ? $_GET["sexo"] : "[Sem sexo]";
        echo "seu nome é $nome, você nasceu em $ano e seu sexo é $sexo";
    ?><br/>
    <a href="index.html">Voltar</a>
        
    
</body>
</html>