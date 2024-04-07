<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 20</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 20 - Faça um Programa que leia um número inteiro menor que 1000 e imprima a quantidade de centenas, dezenas e unidades do mesmo.</h3>


  <form action="" method="GET">
    <label for="">Informe um número até 1000: </label><br>
    <input type="text" name="num"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php
  (int)$num = $_GET['num'];

  if ($num <= 1000) {
    $centena = (int)($num / 100);
    $dezena = (int) ($num / 10);
    $unidade = $num / 1;
    echo "O número " . $num . " tem " . $centena . " centena(s), " . $dezena . " dezena(s) e " . $unidade . " unidade(s).";
  } else {
      echo "O número informado é maior do que 1000.";
  }

  ?>
  
</body>
</html>