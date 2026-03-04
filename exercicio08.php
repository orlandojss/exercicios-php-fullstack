<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 08</title>
</head>
<body>
<h1>Exercicio 08</h1>
    <br>
    <h1>leia 5 numeros e calcule a media</h1>
    <br>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <label> Primeiro Número: </label>
        <input type= "number" name= "num1" id= "num1"/>
        <br><br>
        <label>Segundo Número: </label>
        <input type="number" name= "num2" id= "num2"/>
        <br><br>
        <label>terceiro número: </label>
        <input type="number" name= "num3" id= "num3"/>
        <br><br>
        <label>quarto número: </label>
        <input type="number" name= "num4" id= "num4"/>
        <br><br>
        <label>quinto número: </label>
        <input type="number" name= "num5" id= "num5"/>
        <br><br>
        <button type="submit">Calcular
            <?php
            $num1       =$_POST['num1'];
            $num2       =$_POST['num2'];    
            $num3       =$_POST['num3'];
            $num4       =$_POST['num4'];
            $num5       =$_POST['num5'];
            $resultado  =calculoMedia($num1, $num2, $num3, $num4, $num5);
            ?>
        </button>
        <?php
            echo "A media dos numeros é $resultado";
        ?>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>