<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 10</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  <p><h3>Exercício 10</h3></p>
  <p>Faça um Programa que pergunte em que turno você estuda. Peça para digitar M-matutino ou V-Vespertino ou N- Noturno. 
    Imprima a mensagem "Bom Dia!", "Boa Tarde!" ou "Boa Noite!" ou "Valor Inválido!", conforme o caso</p>
  
  <form action="" method="GET">
    <label for="">Em qual turno você estuda? </label><br>
    <input type="text" name="turno"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php
  $turno = $_GET['turno'];

  if ($turno == "M") {
    echo "Bom dia!";
  } else if ($turno == "V"){
    echo "Boa tarde!";
  } else if ($turno == "N"){
    echo "Boa noite!";
  } else {
    echo "Valor incorreto.";
  }

?>

</body>
</html>