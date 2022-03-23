<?php 
    session_start();

    $arquivo = fopen('arquivo.txt','a');

    $texto = $_SESSION['id'].'//'.$_SESSION['nome'].'//'. $_POST['titulo'].'//'.$_POST['select'].'//'.$_POST['descricao']. PHP_EOL;;

    fwrite($arquivo, $texto);
    fclose($arquivo);

    header('Location:abrir_chamado.php');
?>