<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 11</title>
</head>
<body>
<h1>Verifique se um numero e par ou impar</h1>
    <br>
    <?php include('funcoes.php'); ?>
    <form method="POST">
    <label> Informe o número: </label>
        <input type= "number" name= "num" id= "num"/>
        <button type="submit">Calcular
        <?php
            $num      =$_POST['num'];
            $resultado  =numeroParImpar($num);
            ?>
        </button>
        <p></p>
        <?php
            echo "o numero é $resultado";
        ?>
        <p></p>
        <button><a href="index.php">Voltar</a></button>
</body>
</body>
</html>