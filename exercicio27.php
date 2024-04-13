<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 27</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 27 - Faça um programa que faça 5 perguntas para uma pessoa sobre um crime. As perguntas são:
    <br>a. "Telefonou para a vítima?"
    <br>b. "Esteve no local do crime?"
    <br>c. "Mora perto da vítima?"
    <br>d. "Devia para a vítima?"
    <br>e. "Já trabalhou com a vítima?"
    <br>O programa deve no final emitir uma classificação sobre a participação da pessoa no crime. Se a pessoa
  responder positivamente a 2 questões ela deve ser classificada como "Suspeita", entre 3 e 4 como "Cúmplice" e 5 como "Assassino". 
  Caso contrário, ele será classificado como "Inocente".</h3>

  <br>Responda as seguintes perguntas para a polícia (S ou N): 
  <form action="" method="GET">
    <label for="">Você telefonou para a vítima? </label><br>
    <input type="text" name="p1"><br>
    <label for="">Você esteve no local do crime? </label><br>
    <input type="text" name="p2"><br>
    <label for="">Você mora perto da vítima? </label><br>
    <input type="text" name="p3"><br>
    <label for="">Você devia para a vítima? </label><br>
    <input type="text" name="p4"><br>
    <label for="">Você já trabalhou com a vítima? </label><br>
    <input type="text" name="p5"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php

  $p1 = $_GET['p1'];
  $p2 = $_GET['p2'];
  $p3 = $_GET['p3'];
  $p4 = $_GET['p4'];
  $p5 = $_GET['p5'];

  $respostas = [$p1, $p2, $p3, $p4, $p5];
  $sim = 0;
  $nao = 0;

  for ($i = 0; $i < 5; $i++){
    if ($respostas[$i] == "S") {
      $sim++;
    } else {
      $nao++;
    }
   }

   if ($sim == 2) {
    echo "Suspeito!";
  } else if ($sim >= 3 && $sim <=4) {
    echo "Cúmplice!";
  } else if ($sim == 5) {
    echo "Assassino!";
  } else {
    echo "Inocente!";
  }

  ?>
  
</body>
</html>