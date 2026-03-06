<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 16</title>
</head>
<body>
<h1>crie dois vetores de 10 posições e preencha um com a soma e o outro com a multiplicação entre eles</h1>
    <br>
    <?php include('funcoes.php'); ?>
    <form method="POST">
    <label> Informe o número: </label>
        <input type= "number" name= "vetor[]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <input type= "number" name= "vetor[]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <input type= "number" name= "vetor[]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <input type= "number" name= "vetor[]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <input type= "number" name= "vetor[]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <input type= "number" name= "vetor[]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <input type= "number" name= "vetor[]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <input type= "number" name= "vetor[]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <input type= "number" name= "vetor[]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <input type= "number" name= "vetor[]" id= "n"/>
        <br><br>
        <button type="submit">Calcular
        <?php
            $vetor       =$_POST['vetor'];
            mostrarVetor($vetor);
        ?>
        </button>
    </form> 
        <p></p>
        <?php
            echo "$vetor";
        ?>
        <p></p>
        <button><a href="index.php">Voltar</a></button>
</body>
</html>