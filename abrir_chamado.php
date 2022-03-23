<?php require_once "valida_acesso.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Consultar chamado</title>
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
            <h2>Abertura de chamado</h2>
        </div>
        <div>
            <form action="./registra_chamado.php" method="post">
                <div>
                    <input class="input" type="text" placeholder="Titulo" name="titulo" id="email">
                </div>
                <div>
                <div id="select">
                      <label>Categoria</label>
                      <select class="input" name="select">
                        <option>Criação Usuário</option>
                        <option>Impressora</option>
                        <option>Hardware</option>
                        <option>Software</option>
                        <option>Rede</option>
                      </select>
                    </div>
                </div>
                <div>
                    <input class="input" type="text" name="descricao" placeholder="Descrição" id="descricao">
                </div>
                <div class="voltarAC">
                    <a href="home.php" class="input">Voltar</a>
                    <button class="input" type="submit">Abrir</button>
                </div>
                
            </form>
        </div>
    </main>
</body>
</html>