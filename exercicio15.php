<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 15</title>
</head>
<body>
<h1></h1>
    <br>
    <?php include('funcoes.php'); ?>
    <form method="POST">
    <label> Informe o primeiro número: </label>
        <input type= "number" name= "num1" id= "num1"/>
        <br><br>
        <label> Informe o segundo número: </label>
        <input type= "number" name= "num2" id= "num2"/>
        <br><br>
        <button type="submit">Calcular
        <?php
            $num1       =$_POST['num1'];
            $num2       =$_POST['num2'];
            $resultado  =numeroMaior($num1,$num2);
            ?>
        </button>
        <p></p>
        <?php
            echo "$resultado";
        ?>
        <p></p>
        <button><a href="index.php">Voltar</a></button>
</body>
</html>