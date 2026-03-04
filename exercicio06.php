<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 06</title>
</head>
<body>
    <h1>Exercicio 06</h1>
    <br>
    <h1>Verifique se a senha digitada e valida</h1>
    <br>
    <form method="POST">
        <?php include('funcoes.php'); ?>
        <label>Informe a senha: </label>
        <input type="number" name="senha" id="senha"/>
        <br>
        <button type="submit">Calcular
        <?php
            $senha      = $_POST['senha'];
            $resultado  = senhaValida($senha); 
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