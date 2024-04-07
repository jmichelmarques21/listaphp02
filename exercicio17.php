<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 17</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 17 - Faça um Programa que peça um número correspondente a um determinado ano e em seguida informe se este ano é ou não bissexto.</h3>


  <form action="" method="GET">
    <label for="">Informe um ano: </label><br>
    <input type="text" name="ano"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php
  $ano = $_GET['ano'];


  if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "O ano de {$ano} é bissexto.";
  } else {
    echo "O ano de {$ano} não é bissexto.";
  }


  ?>
  
</body>
</html>