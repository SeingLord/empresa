<?php

    include __DIR__.'/../helpers/ajudantes.php';
    $tem_erros = false;
    $erros_validacao=array();

    $conta =array();
    if(tem_post()){
        if(isset($_POST['email'])){
            $conta['email'] = $_POST['email'];
        }
        if(isset($_POST['senha'])){
            $conta['senha'] = $_POST['senha'];

        }
        $resultado=buscar_conta($conexao, $conta);
        if($resultado!=null){
            header("Location: controllers/menu.php");
            die();
        }else {
            $tem_erros=true;
            $erros_validacao['conta'] = "Conta invalida!";
        }
        
    }
    include __DIR__. "/../views/templateLogin.php";
?>