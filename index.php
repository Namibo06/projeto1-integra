<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor - PHP do Zero</title>
</head>
<body>
    <h1>Descubra o Antecessor e Sucessor</h1>

    <form action="actions/verify_number.php" method="post">
        <label>Informe um número</label>
        <input type="text" placeholder="Ex: 3" name="number_main">

        <button type="submit">Verificar</button>
    </form>
</body>
</html>