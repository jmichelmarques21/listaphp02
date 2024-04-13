<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 25</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 25 - Faça um Programa que peça um número e informe se o número é inteiro ou decimal.
  <br>Dica: utilize uma função de arredondamento.</h3>


  <form action="" method="GET">
    <label for="">Informe um número: </label><br>
    <input type="text" name="num"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  $num = $_GET['num'];

  if ($num != round($num)) {
    echo "O número é decimal.";
  } else {
    echo "O número é inteiro";
  }


  ?>
  
</body>
</html>