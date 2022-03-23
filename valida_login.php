<?php 
    session_start();

    $autenticado = false;
    $usuario_id = null;
    $usuario_nome = null;
    $usuario_tipo = null;

    $users_app = array(
        ['id'=>1,'nome'=>'Admin','tipo'=>0,'email'=>'admin@admin','senha'=>'1234'],
        ['id'=>2,'nome'=>'User','tipo'=>1,'email'=>'user@user','senha'=>'1234'],
        ['id'=>3,'nome'=>'User2','tipo'=>1,'email'=>'user2@user2','senha'=>'1234']
        
    );
    
    foreach ($users_app as $user) {
        if($user['email']==$_POST['email'] && $user['senha']==$_POST['senha']){
            $autenticado = true;
            $usuario_id = $user['id'];
            $usuario_nome = $user['nome'];
            $usuario_tipo = $user['tipo'];
        }
    }
    if($autenticado){
        $_SESSION['autenticado'] = true;
        header('Location:home.php');
    }
    else{
        header('Location:index.php?login=erro');
    }

    $_SESSION['id'] = $usuario_id;
    $_SESSION['tipo'] = $usuario_tipo;
    $_SESSION['nome'] = $usuario_nome;
?>