<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 16</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 16 - Faça um programa que calcule as raízes de uma equação do segundo grau, na forma ax2 + bx + c. 
    O programa deverá pedir os valores de a, b e c e fazer as consistências, informando ao usuário nas seguintes situações:</h3>
    <br>a. Se o usuário informar o valor de A igual a zero, a equação não é do segundo grau e o programa não deve fazer pedir os demais valores, sendo encerrado;
    <br>b. Se o delta calculado for negativo, a equação não possui raízes reais. Informe ao usuário e encerre o programa;
    <br>c. Se o delta calculado for igual a zero a equação possui apenas uma raiz real; informe-a ao usuário;
    <br>d. Se o delta for positivo, a equação possui duas raiz reais; informe-as ao usuário;

    <form action="" method="GET">
    <label for="">Informe o valor de a: </label><br>
    <input type="text" name="a"><br>
    <label for="">Informe o valor de b: </label><br>
    <input type="text" name="b"><br>
    <label for="">Informe o valor de c: </label><br>
    <input type="text" name="c"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  $a = $_GET['a'];
  $b = $_GET['b'];
  $c = $_GET['c'];

  if ($a == 0) {
    echo "Essa equação não é de segundo grau. Encerrando o programa.";
    return;
  }

  $delta = pow(2, $b) - (4 * $a * $c);
  $x1 = (-$b + sqrt($delta)) / (2 * $a);
  $x2 = (-$b - sqrt($delta)) / (2 * $a);
  
  if ($delta < 0) {
    echo "Essa equação não possui valores reais. Encerrando o programa";
    return;
  } else {
    if ($delta == 0) {
      echo "Essa equação possui apenas uma raíz real: " . number_format($x1,2) . ".<br>";
    } else {
      echo "Essa equação possui duas raízes reais: " . number_format($x1, 2) . " e " . number_format($x2, 2) . ".<br>";
    }
  }


  ?>
</body>
</html>