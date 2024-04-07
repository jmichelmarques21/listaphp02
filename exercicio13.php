<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 13</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  <h2>Exercício 12</h2>
  <p><h3>Faça um Programa que leia um número e exiba o dia correspondente da semana. 
  (1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido.</h3></p>

  <form action="" method="GET">
    <label for="">Digite um número de 1 a 7: </label><br>
    <input type="text" name="dia"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php
  $dia = $_GET['dia'];

  switch ($dia) {
    case 1:
      echo "Domingo.";
      break;
    case 2:
      echo "Segunda-feira.";
      break;
    case 3:
      echo "Terça-feira.";
      break;
    case 4:
      echo "Quarta-feira.";
      break;
    case 5:
      echo "Quinta-feira.";
      break;
    case 6:
      echo "Sexta-feira.";
      break;
    case 7:
      echo "Sábado.";
      break;
    default:
      echo "O valor informado é inválido.";
  }



  ?>
</body>
</html>