<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 05</title>
</head>
<body>

<a href="index.php">Voltar</a>

<?php

echo "<p><h3>Exercício 05</h3></p>";
echo "Faça um programa para a leitura de duas notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e apresentar: <br>";
echo "a. A mensagem 'Aprovado', se a média alcançada for maior ou igual a sete;<br>";
echo "b. A mensagem 'Reprovado', se a média for menor do que sete;<br>";
echo "c. A mensagem 'Aprovado com Distinção', se a média for igual a dez.<br><br><br>";
?>

<form action="" method="GET">
  <label for="">Digite a primeira nota: </label><br>
  <input type="text" name="nota1"><br>
  <label for="">Digite a segunda nota: </label><br>
  <input type="text" name="nota2"><br>
  <button type="submit">Enviar</button><br>  
</form>

<?php 
  $nota1 = $_GET['nota1'];
  $nota2 = $_GET['nota2'];

  $media = ($nota1 + $nota2) / 2;

  if($media == 10) {
    echo "<br>Média: " . number_format($media, 2) . "<br>";
    echo "Aprovado com Distinção!";
  } else if ($media < 10 && $media >= 7) {
    echo "<br>Média: " . number_format($media, 2) . "<br>";
    echo "Aprovado!";
  } else {
    echo "<br>Média: " . number_format($media, 2) . "<br>";
    echo "Reprovado!";
  }

?>

</body>
</html>