<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 28</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 28 - Um posto está vendendo combustíveis com a seguinte tabela de descontos:
    <br>a. Álcool:
    <br>i. até 20 litros, desconto de 3% por litro
    <br>ii. acima de 20 litros, desconto de 5% por litro
    <br>b. Gasolina:
    <br>i. até 20 litros, desconto de 4% por litro
    <br>ii. acima de 20 litros, desconto de 6% por litro
    <br>Escreva um algoritmo que leia o número de litros vendidos, o tipo de combustível 
    (codificado da seguinte forma: A-álcool, G-gasolina), calcule e imprima o valor a ser pago pelo cliente sabendo-se que o preço do 
    litro da gasolina é R$2,50 o preço do litro do álcool é R$1,90.</h3>


  <form action="" method="GET">
    <label for="">Informe o combustível (A ou G): </label><br>
    <input type="text" name="combustivel"><br>
    <label for="">Informe a quantidade de litros: </label><br>
    <input type="text" name="litros"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php
  $combustivel = $_GET['combustivel'];
  $litros = $_GET['litros'];

  $gasolina = 2.5;
  $alcool = 1.9;

  if ($combustivel == "G" && $litros < 20) {
    $valor = $litros * ($gasolina * 0.97);
    echo "O valor a ser pago é R$$valor.";
  } else if ($combustivel == "G" && $litros > 20){
    $valor = $litros * ($gasolina * 0.95);
    echo "O valor a ser pago é R$$valor.";
  } else if ($combustivel == "A" && $litros < 20) {
    $valor = $litros * ($alcool * 0.96);
    echo "O valor a ser pago é R$$valor.";
  } else if ($combustivel == "A" && $litros > 20) {
    $valor = $litros * ($alcool * 0.94);
    echo "O valor a ser pago é R$$valor.";
  }


  ?>
  
</body>
</html>