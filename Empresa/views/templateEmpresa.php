<?php 
    $cabecalho_title="Cadastro Empresa" ;
    $cabecalho_css  =' 
        <link rel="stylesheet" href="../assets/templateEmpresa.css">

    ';
    include "cabecalho.php";

    include "formularioEmpresa.php";
    if($exibir_tabela){
        include "tabelaEmpresa.php";
    }
    include "rodape.php";
?>
    