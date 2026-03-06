<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 17</title>
</head>
<body>
    <h1>Leia uma matriz 3x3 e imprima sua diagonal principal.</h1>
    <br>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[0][0]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[0][1]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[0][2]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[1][0]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[1][1]" id= "n"/>  
        <br><br>  
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[1][2]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[2][0]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[2][1]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[2][2]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[3][0]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[3][1]" id= "n"/>
        <br><br>
        <label> Informe o número: </label>
        <br>
        <input type= "number" name= "matriz[3][2]" id= "n"/>
        <br><br>
        <button type="submit">Calcular</button>
        <br><br>
        <?php
            $matriz       =$_POST['matriz'];
            mostrarMatriz($matriz);
        ?>

        <p></p>
        <button><a href="index.php">Voltar</a></button>
</body>
</html>