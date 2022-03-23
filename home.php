<?php require_once "valida_acesso.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Chamado do Heroi</title>
</head>
<body>
    <!-- topo -->
    <nav id="topo">
        <img id="logo" src="./logo.jpg" alt="logo">
        <h1>Chamado do Heroi</h1>
        <a href="logoff.php">Sair</a>
    </nav>

    <!-- login -->
    <main>
        <div id="login">
            <h2>Home</h2>
        </div>
        <div>
            <div>
                <a class="input" href="consultar_chamado.php">Consultar chamado</a>
            </div>
            <div>
                <a class="input" href="abrir_chamado.php">Abrir chamado</a>
            </div>
        </div>
    </main>
</body>
</html>