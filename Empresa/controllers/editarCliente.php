<?php
    include __DIR__."/../helpers/ajudantes.php";
    include __DIR__."/../models/banco.php";

    $exibir_tabela=false;
    $cliente['id'] =$_GET['id'];
    $tem_erros=false;
    $erros_validacao = [];

    if(tem_post())
    {
        $cliente =array();

        if(isset($_POST['nome']) && strlen ($_POST['nome'])>0){
        $cliente['id'] =$_GET['id'];
        }
        else {
            $tem_erros=true;
            $erros_validacao['nome']= "O nome do cliente é obrigatorio!";
        }
        $cliente['nome'] = $_POST['nome'];
        if($_POST['email']){
            $cliente['email'] = $_POST['email'];
        }
        else
        {
            $cliente['email'] = "";
        }
        if($_POST['empresa']){            
            $cliente['fk_id'] =$_POST['empresa']; 
            
        }
        else
        {
            $cliente['fk_id'] = '';
        } 
        
        if(!$tem_erros)
        {
            editar_cliente($conexao, $cliente);
            header('Location: clientes.php');
            die();
        }

    }

    $cliente = buscar_cliente($conexao, $_GET['id']);
    $empresas = buscar_empresas($conexao);



    include __DIR__."/../views/templateCliente.php";

