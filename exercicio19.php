<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 19</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 19 - Faça um Programa que peça uma data no formato dd/mm/aaaa e determine se a mesma é uma data válida.</h3>


  <form action="" method="GET">
    <label for="">Digite uma data (dd/mm/aaaa): </label><br>
    <input type="text" name="data"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php
  $data = $_GET['data'];

  $arrData = explode("/", $data);
  //print_r($arrData);

  if ($arrData[1] <= 12) {
    if ($arrData[1] == 1 || $arrData[1] == 3 || $arrData[1] == 5 || $arrData[1] == 7 || $arrData[1] == 8 || $arrData[1] == 10 || $arrData[1] == 12) {
      if ($arrData[0] <= 31) {
        echo "A data {$data} é válida.";
      } else {
        echo "A data {$data} é inválida.";
      }
    } else if ($arrData[1] == 4 || $arrData[1] == 6 || $arrData[1] == 9 || $arrData[1] == 11) {
      if ($arrData[0] <= 30) {
        echo "A data {$data} é válida.";
      } else {
        echo "A data {$data} é inválida.";
      }
  } else {
    if ($arrData[0] > 29) {
      echo "A data {$data} é inválida.";
    } else {
      echo "A data {$data} é válida.";
    }
  }
}
else {
  echo "A data {$data} é inválida.";
}

  ?>
  
</body>
</html>