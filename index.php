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
            <h2>Login</h2>
        </div>
        <div>
            <form action="./valida_login.php" method="post">
                <div>
                    <input class="input" type="email" placeholder="Email" name="email" id="email">
                </div>
                <div>
                    <input class="input" type="password" placeholder="Senha" name="senha" id="senha">
                </div>
                <button class="input" type="submit">Entrar</button>
            </form>
            <div>
                <a href="./cadastro.php" id="cadastreSe">Cadastre-se aqui</a>
                <?php
                    if (isset($_GET['login'])) {
                        if ($_GET['login']=='erro') {
                            echo '<p id="senhaInvalida">Senha e/ou e-mail Invalidos</p>';
                        }
                        if ($_GET['login']=='erro2') {
                            echo '<p id="senhaInvalida">Precisa se logar</p>';
                        }
                    }
                ?>
            </div>
        </div>
    </main>
</body>
</html>