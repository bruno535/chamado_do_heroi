<?php require_once "valida_acesso.php";?>
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
    <?php
        $arquivo = fopen('arquivo.txt','r');

        $chamados = array();

        while(!feof($arquivo)){
            $linhas = fgets($arquivo);
            $chamados[] = $linhas;
        }
        fclose($arquivo);

    ?>
    <main id="card">
        
        <?php
            foreach($chamados as $chamado){
                $chamado_dados = explode('//',$chamado);
                if($chamado == null){
                    break;
                }
                if($_SESSION['tipo']==1){
                    if($_SESSION['id'] != $chamado_dados[0]){
                        continue;
                    }
                }
        ?>
            <div class="card">
                <div>
                    <h2>Nome:<?= $chamado_dados[1];?></h2>    
                    <h2>Titulo:<?= $chamado_dados[2];?></h2>
                    <h2>Tipo: <?= $chamado_dados[3];?></h2>
                    <h2>Descrição: <?= $chamado_dados[4];?></h2>
                </div>
            </div>
            
        <?php } ?>
        
        <a href="home.php" class="input card">Voltar</a>
    </main>
</body>
</html>