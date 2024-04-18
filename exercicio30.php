<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 30</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 30 - O Hipermercado Tabajara está com uma promoção de carnes que é imperdível. 
    Para atender a todos os clientes, cada cliente poderá levar apenas um dos tipos de carne da promoção, porém não há limites para a 
    quantidade de carne por cliente. Se compra for feita no cartão Tabajara o cliente receberá ainda um desconto de 5% sobre o total 
    da compra. Escreva um programa que peça o tipo e a quantidade de carne comprada pelo usuário e gere um cupom fiscal, contendo as 
    informações da compra: tipo e quantidade de carne, preço total, tipo de pagamento, valor do desconto e valor a pagar.
  <br>Filé Duplo - R$4,90 kg (até 5kg) - R$5,80 kg (acima de 5kg)
  <br>Alcatra - R$5,90 kg (até 5kg) - R$6,80 kg (acima de 5kg)
  <br>Picanha - R$6,90 kg (até 5kg) - R$7,80 kg (acima de 5kg)</h3>




  <form action="" method="GET">
    <label for="">Informe a carne comprada: </label><br>
    <input type="text" name="tipoCarne"><br>
    <label for="">Informe a quantidade comprada: </label><br>
    <input type="text" name="quantCarne"><br>
    <label for="">Informe a forma de pagamento: </label><br>
    <input type="text" name="pagamento"><br>
    <input type="submit"><br>
  </form>

  <?php
  $tipoCarne = $_GET['tipoCarne'];
  $quantCarne = $_GET['quantCarne'];
  $pagamento = $_GET['pagamento'];

  $tipoCarne = strtolower($tipoCarne);
  $pagamento = strtolower($pagamento);
  $desconto = 0;

  if ($tipoCarne == 'filé duplo') {
    if ($quantCarne < 5) {
      $preco = $quantCarne * 4.9;
    } else {
      $preco = $quantCarne * 5.8;
    }
  } else if ($tipoCarne == 'alcatra') {
    if ($quantCarne < 5) {
      $preco = $quantCarne * 5.9;
    } else {
      $preco = $quantCarne * 6.8;
    }
  } else if ($tipoCarne == 'picanha') {
    if ($quantCarne < 5) {
      $preco = $quantCarne * 6.9;
  } else {
    $preco = $quantCarne * 7.8;
  }
}


if ($pagamento == 'cartão tabajara') {
  $desconto = $preco * 0.05;
}

$total = $preco;
$valorAPagar = $preco - $desconto;

echo "<br><br>";

echo "CUPOM FISCAL<br>";
echo "Tipo da carne: $tipoCarne.<br>";
echo "Quantidade comprada: $quantCarne kg.<br>";
echo "Valor total da compra: R$$total.<br>";
echo "Forma de pagamento: $pagamento.<br>";
echo "Valor do desconto: R$$desconto.<br>";
echo "Valor a pagar: R$$valorAPagar.<br>";


  ?>
  
</body>
</html>