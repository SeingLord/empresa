<?php
    include "banco.php";
    include "ajudantes.php";
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
            header("Location: menu.php");
            die();
        }
        
    }
include "templateLogin.php";
?>