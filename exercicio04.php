<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
</head>
<body>
<?php  include('funcoes.php'); ?>
    <h1>exercício 01</h1>
    <br>
    <h2>Informe a idade: </h2>
    <form method="POST">
    <label>Informe a idade: </label>
    <input type= "number" name= "idade" id= "idade"/>
    <br>
    <button type="submit">Calcular
        <?php
        $idade      =$_POST['idade'];
        $resultado  =podeVotar($idade);
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