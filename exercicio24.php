<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 24</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 24 - Faça um Programa que peça um número inteiro e determine se ele é par ou ímpar.</h3>
  <br>Dica: utilize o operador módulo (resto da divisão).

  <form action="" method="GET">
    <label for="">Informe um número: </label><br>
    <input type="text" name="num"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  $num = $_GET['num'];

  if ($num % 2 == 0) {
    echo "O número $num é par.";
  } else {
    echo "O número $num é ímpar.";
  }


  ?>
  
</body>
</html>