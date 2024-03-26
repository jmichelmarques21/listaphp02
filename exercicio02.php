<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 02</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <?php
  echo "<p><h3>Exercício 02</h3></p>";
  echo "Faça um Programa que peça um valor e mostre na tela se o valor é positivo ou negativo."; ?>

  <form action="" method="GET">
  <label for="">Digite um valor: </label><br>
  <input type="text" name="valor"><br>
  <button type="submit">Enviar</button><br>

  <?php $valor = $_GET['valor'];

  if ($valor >= 0) {
    echo "O valor {$valor} é positivo!";
  } else {
    echo "O valor {$valor} é negativo!";
  }

  ?>


  </form>



</body>
</html>