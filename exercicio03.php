<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 03</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  <?php

  echo "<p><h3>Exercício 03</h3></p>";
  echo "Faça um Programa que verifique se uma letra digitada é 'F' ou 'M'. Conforme a letra escrever: F - Feminino, M - Masculino, Sexo Inválido.";

  ?>

  <form action="" method="GET">
    <label for="">Digite uma letra: </label><br>
    <input type="text" name="letra"><br>
    <button type="submit">Enviar</button>
  </form>

  <?php

  $letra = $_GET['letra'];

  if ($letra == 'F' || $letra == 'f') {
    echo "F - Feminino";
  } else if ($letra == 'M' || $letra == 'm'){
    echo "M - Masculino";
  } else {
    echo "Sexo inválido";
  }
  
  ?>

  
</body>
</html>