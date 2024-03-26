<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 04</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <?php 
  echo "<p><h3>Exercício 04</h3></p>";
  echo "Faça um Programa que verifique se uma letra digitada é vogal ou consoante.";

  ?>

  <form action="" method="GET">
    <label for="">Digite uma letra: </label><br>
    <input type="text" name="letra"><br>
    <button type="submit">Enviar</button><br>
  </form>

  <?php 

  $letra = $_GET['letra'];
  $letra = strtoupper($letra);

  if ($letra == 'A' || $letra == 'E'|| $letra == 'I' || $letra == 'O' || $letra == 'U'){
    echo "A letra digitada é uma vogal.";
  } else {
    echo "A letra digitada é uma consoante";
  }

?>  
</body>
</html>