<?php
    session_start();

    if(!isset($_SESSION['$autenticado'])){
        header('Location:index.php?login=erro2');
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Cadastro</title>
</head>
<body>
    <!-- topo -->
    <nav id="topo">
        <img id="logo" src="./logo.jpg" alt="logo">
        <h1>Chamado do Heroi</h1>
    </nav>

    <!-- login -->
    <main>
        <div id="cadastroh2">
            <h2>Cadastre-se</h2>
        </div>
        <div>
            <form action="./cadastramento.php" method="post">
                <div>
                    <input class="input" type="text" placeholder="Nome" name='nome'>
                </div>
                <div>
                    <input class="input" type="email" placeholder="Email" name="email" id="email">
                </div>
                <div>
                    <input class="input" type="password" placeholder="Senha" name="senha" id="senha">
                </div>
                <button class="input" type="submit">Enviar</button>
            </form>
        </div>
    </main>
</body>
</html>