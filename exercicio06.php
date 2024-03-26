<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 06</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <?php

  echo "<p><h3>Exercício 06</h3></p>";
  echo "Faça um Programa que leia três números e mostre o maior deles.";
  ?>

  <form action="" method="GET">
    <label for="">Digite o primeiro número: </label><br>
    <input type="text" name="num1"><br>
    <label for="">Digite o segundo número: </label><br>
    <input type="text" name="num2"><br>
    <label for="">Digite o terceiro número: </label><br>
    <input type="text" name="num3"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  $num3 = $_GET['num3'];

  if ($num1 > $num2 & $num1 > $num3) {
    echo "O maior número é o {$num1}.";
  } else if ($num2 > $num3) {
    echo "O maior número é o {$num2}";
  } else {
    echo "O maior número é o {$num3}";
  }

  ?>


</body>
</html>