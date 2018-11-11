<?php
    include __DIR__."/../helpers/ajudantes.php";
    include __DIR__."/../models/banco.php";

    $exibir_tabela=true;
    $empresas =array();
    $tem_erros = false;
    $erros_validacao=array();
    if(tem_post())
    {
        $empresa =array();
        if(array_key_exists('nome',$_POST)&& strlen($_POST['nome'])>0)
        {
            $empresa['nome'] = $_POST['nome'];
        }
        else {
            $tem_erros=true;
            $erros_validacao["nome"] = 
                "O nome da empresa é obrigatorio";
        }
        if($_POST['telefone']){
            $empresa['telefone'] = $_POST['telefone'];
        }else $empresa['telefone'] = '';
        
        if($_POST['endereco']){
            $empresa['endereco'] = $_POST['endereco'];
        }else $empresa['endereco'] = '';
        
        if(!$tem_erros){
            gravar_empresa($conexao, $empresa);

            header('Location: empresas.php');
            die();
        }
    }
    $empresas = buscar_empresas($conexao);

    $empresa= array(
        'id'    =>   0,
        'nome'  => (isset($_POST['nome']))? $_POST['nome']: '',
        'telefone'  => (isset($_POST['telefone']))? $_POST['telefone']: '',
        'endereco' => (isset($_POST['endereco']))?$_POST['endereco']: ''
    );

    include __DIR__. "/../views/templateEmpresa.php";


?>