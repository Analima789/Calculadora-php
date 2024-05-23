<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sistema Calculadora- entrada de dados </title>
    <link rel="stylesheet" type="text/css" href="CSS/estilos.css">

</head>
<body>
   <form action="calculadora.php" method="POST">
        <label> <b> Entre com um número para valor 1 = </b> </label>
        <input type="text" name="valor1">
        <br>
        <label> <i> Entre com outro número 2= </i> </label>
        <input type="text" name="valor2">
        <input type="submit" value="Calcular">

    </form>

    <br> 
    <a href="menu.php"><h2> Voltar para o Menu Principal </h2> </a> 
</body>
</html>