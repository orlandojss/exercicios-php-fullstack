<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07</title>
</head>
<body>
    <h1>Exercicio 07</h1>
    <br>
    <h1>Verifique o maior horario comparando eles</h1>
    <br>
    <form method="POST">
        <?php include('funcoes.php'); ?>
        <label>Informe um horario: </label>
        <input type="number" name="hora1" id="hora1"/>
        <br>
        <label>Informe o outro horario: </label>
        <input type="number" name="hora2" id="hora2"/>
        <br>
        <button type="submit">Calcular
        <?php
            
            $hora1      = $_POST['hora1'];
            $hora2      = $_POST['hora2'];
            $resultado  = maiorHorario($hora1,$hora2); 
        ?>
        </button>
        <br>
        <h1>
            <?php echo $resultado; ?>
        </h1>
    </form>
    <button><a href="index.php">Voltar</a></button>
</body>
</html>