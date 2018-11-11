<?php

    include __DIR__."/../helpers/ajudantes.php";
    include __DIR__."/../models/banco.php";

    $exibir_tabela=true;
    $cliente= array();
    $tem_erros = false;
    $erros_validacao=array();
    
    if(tem_post())
    {
        $cliente =array();
        
        if(array_key_exists('nome',$_POST) && strlen($_POST['nome'])>0)
        {
            $cliente['nome'] = $_POST['nome'];
        }
        else
        {
            $tem_erros=true;
            $erros_validacao['nome']="O nome do cliente é obrigatorio";
        }
        
        if($_POST['email'])
        {
            $cliente['email'] = $_POST['email'];
        }
        else
        {
            $empresa['email'] = "";
        }
        
        if($_POST['empresa'])
        {
            $cliente['fk_id'] =$_POST['empresa']; 
        }
        
        if(!$tem_erros)
        {
            gravar_cliente($conexao, $cliente);
            header('Location: clientes.php');
            die();
        }
        
        
    }

    $clientes = buscar_clientes($conexao);
    $empresas = buscar_empresas($conexao);

    $cliente= array(
        'id'    =>   0,
        'nome'  => (isset($_POST['nome']))? $_POST['nome']: '',
        'email'  => (isset($_POST['email']))? $_POST['email']: '',
        'fk_id' => (isset($_POST['fk_id']))?$_POST['empresa']: ''
    );


    include __DIR__. "/../views/templateCliente.php";
?>