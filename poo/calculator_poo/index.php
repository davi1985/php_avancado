<?php require('Calculator.class.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculadora Recursiva</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
    <h2>Calculadora Recursiva</h2>
    <small>Digite todos os campos</small>
    <hr>
    <form action="">
      <p>Numero Inicial:<p>
          <input type="number" name="initialNumber" require /><br>
          <p>Somar com:</p>
          <input type="number" name="numberOne" require /> <br>
          <p>Diminuir com:</p>
          <input type="number" name="numberTwo" require /> <br>
          <p>Multiplicar por:</p>
          <input type="number" name="numberThree" require /> <br>
          <p>Dividir por: </p>
          <input type="number" name="numberFour" require /> <br>
          <button type="submit">Verificar Resultado</button>
    </form>
    <h2 class="result">
      <?php echo (result())? result() : '0';?>
    </h2>
  </div>
</body>

</html>
<?php

function result()
{
    $initialNumber;
    $numberOne;
    $numberTwo;
    $numberThree;
    $numberFour;

    if (isset($_GET['initialNumber']) and !empty('initialNumber')) {
        $initialNumber = intval($_GET['initialNumber']);
        $numberOne = intval($_GET['numberOne']);
        $numberTwo = intval($_GET['numberTwo']);
        $numberThree = intval($_GET['numberThree']);
        $numberFour = intval($_GET['numberFour']);
        
        $calc = new Calculator($initialNumber);
        $calc->sum($numberOne)->subtraction($numberTwo)->multiplication($numberThree)->division($numberFour);
        $result = $calc->result();
        return $result;
    } else {
        return false;
    }
}
