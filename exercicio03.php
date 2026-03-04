<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 03</title>
</head>
<body>
<h1>Exercicio 03</h1>
    <br>
    <h1>Verifique se o número esta entre 100 e 200</h1>
    <br>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <label> Primeiro Número: </label>
        <input type= "number" name= "primeiroNumero" id= "primeiroNumero"/>
        <br><br>
        <label>Segundo Número: </label>
        <input type="number" name= "segundoNumero" id= "segundoNumero"/>
        <br><br>
        <label>Numero de Busca: </label>
        <input type="number" name= "terceiroNumero" id= "terceiroNumero"/>
        <button type="submit">Calcular
            <?php
            $primeiroNumero =$_POST['primeiroNumero'];
            $segundoNumero  =$_POST['segundoNumero'];
            $numero         =$_POST['terceiroNumero'];
            $resultado      =verificarNumero($primeiroNumero, $segundoNumero, $numero);
            ?>
        </button>
        <?php
        if($resultado == true){
            echo "o $numero está no intervalo entre $primeiroNumero e $segundoNumero";
        }else{
            echo "O $numero não esta no intervalo entre $primeiroNumero e $segundoNumero";
        }
        ?>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>