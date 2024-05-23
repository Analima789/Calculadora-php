<?php
 
 /* entrada
 valor1,valor2: real


 processo
 soma <- a+b
 sub <- a-b
 mult <- a*b


 divi <- a/b o divisor não pode igual a 0, senão irá dar erro de divisão by zero


 saída:


 soma
 sub
 mult
 divi
 ---------------------------------------------------------------------------------
 ----------
 */
?>
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

<?php 


   //definição de variaveis e atribuir valores
   //recebe dados do formulário através do método POST
   $a = $_POST['valor1'];
   $b = $_POST['valor2'];
   
   //processo
   $soma = $a + $b;
   $sub = $a - $b;
   $mult = $a * $b;


   echo " <br> <b> o resultado da soma de $a + $b= $soma </b>";
   echo " <br> <i> o resultado da subtração de $a - $b= $sub </i> ";
   echo " <br> <b> o resultado da multiplicação de $a * $b= $mult </b> ";


   if ($b==0) {
      echo " <br> não foi possível calcular a divisão, porque o divisor é igual a ZERO!!!";
   }

   else {
      $divi = $a/$b;
      echo "<br> <i> o resultado da divisão de $a/$b=$divi </i>";
   }

   echo"<b> <br><br> fim do aplicativo web!!! </b> ";

   ?>

   <a href="form_calculadora.php"> <h2> Voltar para o formulario </h2> </a>

</body>
</html>