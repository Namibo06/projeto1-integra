<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e Sucessor - PHP do Zero</title>

    <script src="../js/back_page.js" defer></script>
</head>
<body>
    <button type="button" id="btn_back">Voltar</button>

    <h2>Seu número</h2>
    <h3><?= $_SESSION['numberMain']?></h3>

    <h2>Antecessor</h2>
    <h3><?= $_SESSION['predecessor']?></h3>

    <h2>Sucessor</h2>
    <h3><?= $_SESSION['successor']?></h3>
</body>
</html>