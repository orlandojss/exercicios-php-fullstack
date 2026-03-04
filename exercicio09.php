<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 09</title>
</head>
<body>
<br>
    <h1>Verifique se o número esta entre 100 e 200</h1>
    <br>
    <?php include('funcoes.php'); ?>
    <form method="POST">
    <label> Primeiro Número: </label>
        <input type= "number" name= "n1" id= "n1"/>
        <br><br>
        <label>Segundo Número: </label>
        <input type="number" name= "n2" id= "n2"/>
        <br><br>
        <label>terceiro número: </label>
        <input type="number" name= "n3" id= "n3"/>
        <br><br>
        <label>quarto número: </label>
        <input type="number" name= "n4" id= "n4"/>
        <br><br>
        <label>quinto número: </label>
        <input type="number" name= "n5" id= "n5"/>
        <br><br>
        <button type="submit">Calcular
            <?php
            $n1         =$_POST['n1'];
            $n2         =$_POST['n2'];    
            $n3         =$_POST['n3'];
            $n4         =$_POST['n4'];
            $n5         =$_POST['n5'];
            $resultado  =calculoMedia($n1, $n2, $n3, $n4, $n5);
            ?>
        </button>
        <?php
            echo "$resultado";
        ?>
        <button><a href="index.php">Voltar</a></button>
</body>
</html>