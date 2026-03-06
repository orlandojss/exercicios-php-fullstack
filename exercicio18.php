<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 18</title>
</head>
<body>
<h1>Leia 10 valores e calcule a média. Mostre os que estão acima dela</h1>
    <br>
    <?php include('funcoes.php'); ?>
    <form method="POST">
        <label> 1º Número: </label>
        <br>
        <input type= "number" name= "n1" id= "n1"/>
        <br><br>
        <label>2º Número: </label>
        <br>
        <input type="number" name= "n2" id= "n2"/>
        <br><br>
        <label> 3º número: </label>
        <br>
        <input type="number" name= "n3" id= "n3"/>
        <br><br>
        <label> 4º número: </label>
        <br>
        <input type="number" name= "n4" id= "n4"/>
        <br><br>
        <label> 5º número: </label>
        <br>
        <input type="number" name= "n5" id= "n5"/>
        <br><br>
        <label> 6º Número: </label>
        <br>
        <input type= "number" name= "n6" id= "n6"/>
        <br><br>
        <label> 7º Número: </label>
        <br>
        <input type="number" name= "n7" id= "n7"/>
        <br><br>
        <label> 8º número: </label>
        <br>
        <input type="number" name= "n8" id= "n8"/>
        <br><br>
        <label> 9º número: </label>
        <br>
        <input type="number" name= "n9" id= "n9"/>
        <br><br>
        <label> 10º número: </label>
        <br>
        <input type="number" name= "n10" id= "n10"/>
        <br><br>
        <button type="submit">Calcular</button>
        <br><br>
            <?php
            $n1         =$_POST['n1'];
            $n2         =$_POST['n2'];    
            $n3         =$_POST['n3'];
            $n4         =$_POST['n4'];
            $n5         =$_POST['n5'];
            $n6         =$_POST['n6'];
            $n7         =$_POST['n7'];    
            $n8         =$_POST['n8'];
            $n9         =$_POST['n9'];
            $n10         =$_POST['n10'];
            $resultado  =calculoMedia($n1, $n2, $n3, $n4, $n5, $n6, $n7, $n8, $n9, $n10);
            ?>

        <?php
            echo "$resultado";
        ?>
        <br><br>
        <button><a href="index.php">Voltar</a></button>
</body>
</html>