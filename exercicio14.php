<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 14</title>
</head>
<body>
  <a href="index.php">Voltar</a>
  <h2>Exercício 14</h2>
  <h3>Faça um programa que lê as duas notas parciais obtidas por um aluno numa disciplina ao longo de um semestre, e calcule a sua média. 
    A atribuição de conceitos obedece à tabela abaixo: </h3>
    <br>a. O algoritmo deve mostrar na tela as notas, a média, o conceito correspondente e a mensagem “APROVADO” se o conceito for A, B ou C ou
    “REPROVADO” se o conceito for D ou E. <br><br>
  <table>
    <tr>
      <td>Média de Aproveitamento: </td>
      <td>Conceito:</td>
    </tr>
    <tr>
      <td>Entre 9.0 e 10.0</td>
      <td>A</td>
    </tr>
    <tr>
      <td>Entre 7.5 e 9.0</td>
      <td>B</td>
    </tr>
    <tr>
      <td>Entre 6.0 e 7.5</td>
      <td>C</td>
    </tr>
    <tr>
      <td>Entre 4.0 e 6.0</td>
      <td>D</td>
    </tr> <tr>
      <td>Entre 4.0 e zero</td>
      <td>E</td>
    </tr>    
  </table>

  <form action="" method="GET">
    <label for="">Digite a primeira nota: </label><br>
    <input type="text" name="n1"><br>
    <label for="">Digite a segunda nota: </label><br>
    <input type="text" name="n2"><br>
    <label for="">Digite a terceira nota: </label><br>
    <input type="text" name="n3"><br>
    <button type="submit">Enviar</button>
  </form>

  <?php 
   
   $n1 = $_GET['n1'];
   $n2 = $_GET['n2'];
   $n3 = $_GET['n3'];

   $media = ($n1 + $n2 + $n3) / 3;

   if ($media >= 9.0 ) {
    echo "Média: " . number_format( $media, 2) ." | A - Aluno Aprovado!";
   } else if ($media >= 7.5 & $media < 9.0) {
    echo "Média: " . number_format( $media, 2) ." | B - Aluno Aprovado!";
   } else if ($media >= 6.0 & $media < 7.5) {
    echo "Média: " . number_format( $media, 2) ." | C - Aluno Aprovado!";
   } else if ($media >= 4.0 & $media < 6.0) {
    echo "Média: " . number_format( $media, 2) ." | D - Aluno Reprovado!";
   } else if ($media < 4.0) {
    echo "Média: " . number_format( $media, 2) ." | E - Aluno Reprovado!";
   }
  
  ?>

  
</body>
</html>