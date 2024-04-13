<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 29</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 29 -  Uma fruteira está vendendo frutas com a seguinte tabela de preços. Se o cliente comprar mais de 8 Kg em frutas 
  ou o valor total da compra ultrapassar R$ 25,00, receberá ainda um desconto de 10% sobre este total. Escreva um algoritmo para ler
  a quantidade (em Kg) de morangos e a quantidade (em Kg) de maças adquiridas e escreva o valor a ser pago pelo cliente.
  <br>Morango - Até 5kg (R$2,5kg) - Acima 5kg (R$2,20kg).
  <br>Maçã - Até 5kg (R$1,80kg) - Acima 5kg (R$1,50kg).</h3>


  <form action="" method="GET">
    <label for="">Informe a quantidade (kg) de morangos: </label><br>
    <input type="text" name="kgMorango"><br>
    <label for="">Informe a quantidade (kg) de maçãs: </label><br>
    <input type="text" name="kgMaca"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php
  $kgMorango = $_GET['kgMorango'];
  $kgMaca = $_GET['kgMaca'];

  $kgTotal = $kgMorango + $kgMaca;

  if ($kgMorango <= 5){
    $precoMorango = $kgMorango * 2.50;
  } else {
    $precoMorango = $kgMorango * 2.20;
  }

  if ($kgMaca <= 5){
    $precoMaca = $kgMaca * 1.80;
  } else {
    $precoMaca = $kgMaca * 1.50;
  }

  $precoTotal = $precoMorango + $precoMaca;

  if ($kgTotal > 8 || $precoTotal >= 25) {
    $precoFinal = $precoTotal * 0.90;
  }

  echo "Kg Morangos: $kgMorango kg<br>";
  echo "Kg Maçãs: $kgMaca kg<br>";
  echo "Peso total: $kgTotal kg<br>";
  echo "Valor total: R$$precoTotal<br>";
  echo "Valor final: R$$precoFinal";



  ?>
  
</body>
</html>