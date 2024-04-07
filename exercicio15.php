<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 15</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 15 - Faça um Programa que peça os 3 lados de um triângulo. 
    O programa deverá informar se os valores podem ser um triângulo. 
    Indique, caso os lados formem um triângulo, se o mesmo é: equilátero, isósceles ou escaleno. Dicas: </h3>
    <br>a. Três lados formam um triângulo quando a soma de dois lados for maior que o terceiro;
    <br>b. Triângulo Equilátero: três lados iguais;
    <br>c. Triângulo Isósceles: dois lados iguais;
    <br>d. Triângulo Escaleno: três lados diferentes;
    <br><br>


  <form action="">
    <label for="">Informe o valor do primeiro lado: </label><br>
    <input type="text" name="t1"><br>
    <label for="">Informe o valor do segundo lado: </label><br>
    <input type="text" name="t2"><br>
    <label for="">Informe o valor do terceiro lado: </label><br>
    <input type="text" name="t3"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  $t1 = $_GET['t1'];
  $t2 = $_GET['t2'];
  $t3 = $_GET['t3'];

  if ($t1 + $t2 > $t3 || $t2 + $t3 > $t1 || $t1 + $t3 > $t2){
    if ($t1 == $t2 & $t1 == $t3) {
      echo "Triângulo equilátero.";
  } else if ($t1 == $t2 || $t1 == $t3 || $t2 == $t3) {
    echo "Triângulo isósceles.";
  } else {
    echo "Triângulo escaleno.";
  } 
  }

  ?>
  
</body>
</html>