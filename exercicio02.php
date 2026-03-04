<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02</title>
</head>
<body>
    <h1>Exercicio 02</h1>
    <br>
    <h1>Verifique se o ano é bissexto</h1>
    <br>
    <form method="POST">
        <?php include('funcoes.php'); ?>
        <label>Informe um ano: </label>
        <input type="number" name="ano" id="ano"/>
        <br>
        <button type="submit">Calcular
        <?php
            $ano        = $_POST['ano'];
            $resultado  = bissexto($ano); 
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