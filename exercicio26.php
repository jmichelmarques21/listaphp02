<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 26</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 26 - Faça um Programa que leia 2 números e em seguida pergunte ao usuário qual operação ele deseja realizar. 
  O resultado da operação deve ser acompanhado de uma frase que diga se o número é:
  <br>a. par ou ímpar;
  <br>b. positivo ou negativo;
  <br>c. inteiro ou decimal.</h3>


  <form action="" method="GET">
    <label for="">Informe o primeiro número: </label><br>
    <input type="text" name="num1"><br>
    <label for="">Informe o segundo número: </label><br>
    <input type="text" name="num2"><br>
    <label for="">Qual operação você deseja realizar? (+ - * /) </label><br>
    <input type="text" name="operacao"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  $num1 = $_GET['num1'];
  $num2 = $_GET['num2'];
  $operacao = $_GET['operacao'];

  if ($operacao == "+") {
    $resultado = ($num1 + $num2);
  } else if ($operacao == "-"){
    $resultado = ($num1 - $num2);
  } else if ($operacao == "*"){
    $resultado = ($num1 * $num2);
  } else if ($operacao == "/") {
    $resultado = ($num1 / $num2);
  } else {
    echo "Operação incorreta.";
  }

  echo "O resultado da operação '$operacao' entre os números $num1 e $num2 é: $resultado<br>";
  if ($resultado > 0) {
    echo "O número $resultado é positivo";
  } else {
    echo "O número $resultado é negativo";
  }

  if ($resultado % 2 == 0) {
    echo ", par e ";
  } else {
    echo ", ímpar e ";
  }

  if ($resultado != round($resultado)){
    echo " decimal.";
  } else {
    echo " inteiro.";
  }


  ?>
  
</body>
</html>