<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 12</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  <p><h3>Faça um programa para o cálculo de uma folha de pagamento, sabendo que os descontos são do Imposto de Renda, 
  que depende do salário bruto (conforme tabela abaixo) e 3% para o Sindicato e que o FGTS corresponde a 11% do Salário Bruto,
  mas não é descontado (é a empresa que deposita). O Salário Líquido corresponde ao Salário Bruto menos os descontos. 
  O programa deverá pedir ao usuário o valor da sua hora e a quantidade de horas trabalhadas no mês: </h3></p>
  a. Desconto do IR: <br>
  b. Salário Bruto até 900 (inclusive) - isento <br>
  c. Salário Bruto até 1500 (inclusive) - desconto de 5% <br>
  d. Salário Bruto até 2500 (inclusive) - desconto de 10% <br>
  e. Salário Bruto acima de 2500 - desconto de 20% <br>


  <form action="" method="GET">
    <label for="">Informe o valor da hora trabalhada: </label><br>
    <input type="text" name="valorHoras"><br>
    <label for="">Informe a quantidade de horas trabalhadas: </label><br>
    <input type="text" name="quantHoras"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  $valorHoras = $_GET['valorHoras'];
  $quantHoras = $_GET['quantHoras'];

  $sindicato = 0.03;
  $fgts = 0.11;

  $salarioBruto = $valorHoras * $quantHoras;

  if ($salarioBruto <= 900) {
    $descontoSindicato = $salarioBruto * $sindicato;
    $descontoFgts = $salarioBruto * $fgts;
    $salarioLiquido = $salarioBruto - $descontoSindicato;
    echo "Salário bruto: R$" . number_format($salarioBruto, 2) . ".<br>";
    echo "Desconto IR: isento.<br>";
    echo "Desconto sindicato(3%): R$" . number_format($descontoSindicato,2) . ".<br>";
    echo "FGTS (11%): R$" . number_format($descontoFgts, 2) . ".<br>";
    echo "Salário líquido: R$" . number_format($salarioLiquido,2) . ".<br>";
  } else if ($salarioBruto <= 1500) {
    $descontoSindicato = $salarioBruto * $sindicato;
    $descontoFgts = $salarioBruto * $fgts;
    $impostoRenda = $salarioBruto * 0.05;
    $salarioLiquido = ($salarioBruto - $descontoSindicato) - $impostoRenda;
    echo "Salário bruto: R$" . number_format($salarioBruto, 2) . ".<br>";
    echo "Desconto IR: isento.<br>";
    echo "Desconto sindicato(3%): R$" . number_format($descontoSindicato,2) . ".<br>";
    echo "FGTS (11%): R$" . number_format($descontoFgts, 2) . ".<br>";
    echo "Desconto IR (5%): R$" . number_format($impostoRenda,2) . ".<br>";
    echo "Salário líquido: R$" . number_format($salarioLiquido,2) . ".<br>";
  } else if ($salarioBruto <= 2500) {
    $descontoSindicato = $salarioBruto * $sindicato;
    $descontoFgts = $salarioBruto * $fgts;
    $impostoRenda = $salarioBruto * 0.10;
    $salarioLiquido = ($salarioBruto - $descontoSindicato) - $impostoRenda;
    echo "Salário bruto: R$" . number_format($salarioBruto, 2) . ".<br>";
    echo "Desconto IR: isento.<br>";
    echo "Desconto sindicato(3%): R$" . number_format($descontoSindicato,2) . ".<br>";
    echo "FGTS (11%): R$" . number_format($descontoFgts, 2) . ".<br>";
    echo "Desconto IR (10%): R$" . number_format($impostoRenda,2) . ".<br>";
    echo "Salário líquido: R$" . number_format($salarioLiquido,2) . ".<br>";
  } else {
    $descontoSindicato = $salarioBruto * $sindicato;
    $descontoFgts = $salarioBruto * $fgts;
    $impostoRenda = $salarioBruto * 0.20;
    $salarioLiquido = ($salarioBruto - $descontoSindicato) - $impostoRenda;
    echo "Salário bruto: R$" . number_format($salarioBruto, 2) . ".<br>";
    echo "Desconto IR: isento.<br>";
    echo "Desconto sindicato(3%): R$" . number_format($descontoSindicato,2) . ".<br>";
    echo "FGTS (11%): R$" . number_format($descontoFgts, 2) . ".<br>";
    echo "Desconto IR (20%): R$" . number_format($impostoRenda,2) . ".<br>";
    echo "Salário líquido: R$" . number_format($salarioLiquido,2) . ".<br>";
  }

 number_format($x, 2)

  ?>
  
</body>
</html>