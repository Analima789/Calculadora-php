<!DOCTYPE html>
<html lang="pt-br>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" type="text/css" href="CSS/estilos1.css">
</head>
<body>
    <?php
    
    //variaveis
    $tab = $_POST['tabuada'];
    $i = $i + 1;

    for($i=0; $i<11; $i++) {
        echo ("<b>");
        echo ("$tab * $i= $tab*$i");
        echo ("</b>");
    }

    ?>
    
</body>
</html>