<?php
 include "banco.php";
    include "ajudantes.php";

    $exibir_tabela=false;

      $cliente['id'] =$_GET['id'];
    if(tem_post())
    {
        $cliente =array();
        $cliente['id'] =$_GET['id'];
        
        $cliente['nome'] = $_POST['nome'];
        if($_POST['email']){
            $cliente['email'] = $_POST['email'];
        }else $empresa['email'] = '';
        if($_POST['empresa']){
            $cliente['fk_id'] =$_POST['empresa']; 
        }else $cliente['fk_id'] = '';
    
        editar_cliente($conexao, $cliente);
        
        header('Location: clientes.php');
        die();
    }
       $cliente = buscar_cliente($conexao, $_GET['id']);


    include "templateCliente.php";
?>