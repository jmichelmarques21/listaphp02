<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 01</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  <?php

  echo "<h3>Exercício 01</h3>";
  echo "Faça um Programa que peça dois números e imprima o maior deles.";?>

  <form action="" method="GET">
    <label for="">Digite o primeiro número: </label><br>
    <input type="text" name="num1">
    <br>
    <label for="">Digite o segundo número: </label><br>
    <input type="text" name="num2">
    <br>
    <button type="submit">Enviar</button>
  </form>
  <?php
  
  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  echo "<br>";

  if ($num1 > $num2) {
    echo "O maior valor é o " . $num1 . ".";
  } else if ($num2 > $num1) {
    echo "O maior valor é o " . $num2 . ".";
  } else {
    echo "Os valores são iguais.";
  }

  ?>
  
</body>
</html>