<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 10</title>
</head>
<body>
<h1></h1>
    <br>
    <?php include('funcoes.php'); ?>
    <form method="POST">
    <label> Informe a sua Idade: </label>
        <input type= "number" name= "idade" id= "idade"/>
        <button type="submit">Calcular
        <?php
            $idade      =$_POST['idade'];
            $resultado  =idades($idade);
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