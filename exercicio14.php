<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 14</title>
</head>
<body>
    <br>
    <h1>Verifique se o numero a baixo é multiplo pr 3 e 5 </h1>
    <br>
    <form method="POST">
        <?php include('funcoes.php')?>
        <label> Informe um numero: </label>
        <input type="text" name="num1" id="num1">
        <br><br>
        <button type="submit">Calcular
        <?php 
            $num1       =$_POST['num1'];
            $resultado  =numeroMultiplo($num1);
        ?>
        </button>
        <?php
            echo $resultado;
        ?>
    </form>
</body>
</html>