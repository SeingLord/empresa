<?php

    include "banco.php";
    include "ajudantes.php";

    $exibir_tabela=true;
    $cliente= array();
  
    if(tem_post())
    {
        $cliente =array();
        $cliente['nome'] = $_POST['nome'];
        
        if($_POST['email']){
            $cliente['email'] = $_POST['email'];
        }else $empresa['email'] = '';

        if($_POST['empresa']){
            $cliente['fk_id'] = $_POST['empresa'];
        }else $cliente['fk_id'] = '';
        gravar_cliente($conexao, $cliente);
        header('Location: clientes.php');
        die();
        
    }
       $clientes = buscar_clientes($conexao);
        $empresas = buscar_empresas($conexao);

    $cliente= array(
        'id'    =>   0,
        'nome'  => (isset($_POST['nome']))? $_POST['nome']: '',
        'email'  => (isset($_POST['email']))? $_POST['email']: '',
        'fk_id' => (isset($_POST['fk_id']))?$_POST['empresa']: ''
    );


    include "templateCliente.php";
?>