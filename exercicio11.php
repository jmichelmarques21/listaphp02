<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 11</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  <p><h3>As Organizações Tabajara resolveram dar um aumento de salário aos seus colaboradores e lhe contrataram para desenvolver o programa 
    que calculará os reajustes. Faça um programa que recebe o salário de um colaborador e o reajuste segundo o seguinte critério, baseado no salário atual: </h3></p>
  a. salários até R$ 280,00 (incluindo) : aumento de 20%<br>
  b. salários entre R$ 280,00 e R$ 700,00 : aumento de 15%<br>
  c. salários entre R$ 700,00 e R$ 1500,00 : aumento de 10%<br>
  d. salários de R$ 1500,00 em diante : aumento de 5%<br>
  e. Após o aumento ser realizado, informe na tela:<br>
  f. o salário antes do reajuste;<br>
  g. o percentual de aumento aplicado;<br>
  h. o valor do aumento;<br>
  i. o novo salário, após o aumento<br>

<form action="" method="GET">
  <label for="">Informe o salário do colaborador: </label><br>
  <input type="text" name="salario"><br>
  <button type="submit">Enviar</button><br>
</form>

<?php
  (float)$salario = $_GET['salario'];

  if ($salario < 280.00) {
    $aumento = $salario * 0.2;
    $novoSalario = $salario + $aumento;
    echo "Salário antes do reajuste: R$" . number_format($salario,2) . "<br>";
    echo "Percentual de aumento: 20%<br>";
    echo "Valor do aumento: R$" . number_format($aumento, 2) . "<br>";
    echo "Novo salário: R$" . number_format($novoSalario,2) . "<br>";
  } else if ($salario >= 280.00 && $salario < 700.00) {
    $aumento = $salario * 0.15;
    $novoSalario = $salario + $aumento;
    echo "Salário antes do reajuste: R$" . number_format($salario,2) . "<br>";
    echo "Percentual de aumento: 15%<br>";
    echo "Valor do aumento: R$" . number_format($aumento, 2) . "<br>";
    echo "Novo salário: R$" . number_format($novoSalario,2) . "<br>";
  } else if ($salario >= 700.00 && $salario < 1500.00) {
    $aumento = $salario * 0.1;
    $novoSalario = $salario + $aumento;
    echo "Salário antes do reajuste: R$" . number_format($salario,2) . "<br>";
    echo "Percentual de aumento: 10%<br>";
    echo "Valor do aumento: R$" . number_format($aumento, 2) . "<br>";
    echo "Novo salário: R$" . number_format($novoSalario,2) . "<br>";
  } else {
    $aumento = $salario * 0.05;
    $novoSalario = $salario + $aumento;
    echo "Salário antes do reajuste: R$" . number_format($salario,2) . "<br>";
    echo "Percentual de aumento: 5%<br>";
    echo "Valor do aumento: R$" . number_format($aumento, 2) . "<br>";
    echo "Novo salário: R$" . number_format($novoSalario,2) . "<br>";
  }


?>


</body>
</html>