<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 22</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Faça um programa para leitura de três notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e apresentar:</h3>
  <br>a. A mensagem "Aprovado", se a média for maior ou igual a 7, com a respectiva média alcançada;
  <br>b. A mensagem "Reprovado", se a média for menor do que 7, com a respectiva média alcançada;
  <br>c. A mensagem "Aprovado com Distinção", se a média for igual a 10.

  <form action="" method="GET">
  <label for="">Informe a primeira nota: </label><br>
  <input type="text" name="nota1"><br>
  <label for="">Informe a segunda nota: </label><br>
  <input type="text" name="nota2"><br>
  <label for="">Informe a terceira nota: </label><br>
  <input type="text" name="nota3"><br>
  <button type="submit">Enviar</button><br><br>
  </form>

  <?php
  $nota1 = $_GET['nota1'];
  $nota2 = $_GET['nota2'];
  $nota3 = $_GET['nota3'];

  $media = ($nota1 + $nota2 + $nota3) / 3;

  if ($media == 10.0) {
    echo "Média: " . number_format($media, 2) . " - Aprovado com distinção!";
  } else if ($media >= 7.0) {
    echo "Média: " . number_format($media, 2) . " - Aprovado!";
  } else {
    echo "Média: " . number_format($media, 2) . " - Reprovado!";
  }


  ?>
  
</body>
</html>