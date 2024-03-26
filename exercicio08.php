<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 08</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <?php

  echo "<p><h3>Exercício 08</h3></p>";
  echo "<p>Faça um programa que pergunte o preço de três produtos e informe qual produto você deve comprar, sabendo que a decisão é sempre pelo mais barato.</p>";

  ?>

  <form action="" method="GET">
    <label for="">Insira o preço do primeiro produto: </label><br>
    <input type="text" name="p1"><br>
    <label for="">Insira o preço do segundo produto: </label><br>
    <input type="text" name="p2"><br>
    <label for="">Insira o preço do terceiro produto: </label><br>
    <input type="text" name="p3"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  $p1 = $_GET['p1'];
  $p2 = $_GET['p2'];
  $p3 = $_GET['p3'];

  if ($p1 < $p2 & $p1 < $p3) {
    echo "O menor valor é: R$" . number_format($p1,2) . ".";
  } else if ($p2 < $p1 & $p2 < $p3) {
    echo "O menor valor é: R$" . number_format($p2,2) . ".";
  } else {
    echo "O menor valor é: R$" . number_format($p3,2) . ".";
  }

  ?>

</body>
</html>