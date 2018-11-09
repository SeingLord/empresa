<?php
    include "banco.php";
    include "ajudantes.php";

    $exibir_tabela=true;
    $empresas =array();

    if(tem_post())
    {
        $empresa =array();
        $empresa['nome'] = $_POST['nome'];
        if($_POST['telefone']){
            $empresa['telefone'] = $_POST['telefone'];
        }else $empresa['telefone'] = '';
        if($_POST['endereco']){
            $empresa['endereco'] = $_POST['endereco'];
        }else $empresa['endereco'] = '';
    
        gravar_empresa($conexao, $empresa);
        
        header('Location: empresas.php');
        die();
    }
       $empresas = buscar_empresas($conexao);

    $empresa= array(
        'id'    =>   0,
        'nome'  => (isset($_POST['nome']))? $_POST['nome']: '',
        'telefone'  => (isset($_POST['telefone']))? $_POST['telefone']: '',
        'endereco' => (isset($_POST['endereco']))?$_POST['endereco']: ''
    );


    include "templateEmpresa.php";
?>