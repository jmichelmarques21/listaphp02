<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 21</title>
</head>
<body>
  <a href="index.php">Voltar</a>

  <h3>Exercício 21 - Observando os termos no plural a colocação do "e", da vírgula entre outros. Exemplo: </h3>
  <br>a. 326 = 3 centenas, 2 dezenas e 6 unidades
  <br>b. 12 = 1 dezena e 2 unidades. Testar com: 326, 300, 100, 320, 310,305, 301, 101, 311, 111, 25, 20, 10, 21, 11, 1, 7 e 16

  <form action="" method="GET">
    <label for="">Informe o número: </label><br>
    <input type="text" name="num"><br>
    <button type="submit">Enviar</button><br><br>
  </form>

  <?php
  $num = $_GET['num'];

  $centenas = (int) ($num / 100);
  $dezenas = (int) (($num % 100) / 10);
  $unidades = $num % 10;
  
  $valores = "";

  if ($centenas > 0) {
    $valores .= "$centenas centena";
    if ($centenas > 1) {
      $valores .= "s";
    }
    $valores .= ", ";
  }

  if ($dezenas > 0) {
    $valores .= "$dezenas dezena";
    if ($dezenas > 1) {
      $valores .= "s";
    }
    $valores .= ", ";
  }

  if ($unidades > 0) {
    $valores .= "$unidades unidade";
    if ($unidades > 1) {
      $valores .= "s";
    }
    $valores .= ".";
  }

  echo "O número digitado foi: $num - Ele tem $valores";
    








  //   echo "O número tem " . $num . " tem " . $centenas . " centena, " . $dezenas ." dezenas e " . $unidades . " unidades.";
  // } else {
  //   echo "O número tem " . $num . " tem " .$centenas . " centenas, " . $dezenas ." dezenas e " . $unidades . " unidades.";
  // }


  ?>
  
</body>
</html>