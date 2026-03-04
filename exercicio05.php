<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>
</head>
<body>
<?php  include('funcoes.php'); ?>
    <h1>exercício 05</h1>
    <br>
    <h2>Informe o dia da semana</h2>
    <form method="POST">
    <label>Informe o dia da semana: </label>
    <input type= "number" name= "dia" id= "dia"/>
    <br>
    <button type="submit">Calcular
        <?php
        $num      =$_POST['dia'];
        $resultado  =diaDaSemana($num);
        ?>
    </button>
    <br>
    <?php
        echo $resultado
    ?>
    </form>
    <button><a href="index.php">Voltar</a></button>   
</body>
</html>