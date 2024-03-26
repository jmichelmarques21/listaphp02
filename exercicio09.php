<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 09</title>
</head>
<body>
  <a href="index.php">Exercício 09</a>
  <p><h3>Exercício 09</h3></p>
  <p>Faça um Programa que leia três números e mostre-os em ordem decrescente</p>

  <form action="" method="GET">
    <label for="">Digite o primeiro número: </label><br>
    <input type="text" name="num1"><br>
    <label for="">Digite o segundo número: </label><br>
    <input type="text" name="num2"><br>
    <label for="">Digite o terceiro número: </label><br>
    <input type="text" name="num3"><br>
    <button type="submit">Enviar</button><br><br>

  <?php

  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  $num3 = $_GET['num3'];

  if ($num1 < $num2 & $num1 < $num3) {
    if ($num2 < $num3) {
      echo "{$num3} - {$num2} - {$num1}";
    } else if ($num3 < $num2) {
      echo "{$num2} - {$num3} - {$num1}";
    }
  } else if ($num2 < $num1 & $num2 < $num3) {
    if ($num1 < $num3) {
      echo "{$num3} - {$num1} - {$num2}";
    } else if ($num3 < $num1) {
      echo "{$num1} - {$num3} - {$num2}";
    }
  } else {
    echo "{$num1} - {$num2} - {$num3}";
  }

  ?>

  </form>
</body>
</html>