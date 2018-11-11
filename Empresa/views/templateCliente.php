<?php 
    $cabecalho_title="Cadastro Cliente" ;
    $cabecalho_css  =' 
        <link rel="stylesheet" href="../assets/templateCliente.css">

    ';
include "cabecalho.php";
include "formularioCliente.php";
if($exibir_tabela){
     include "tabelaCliente.php";
}
include "rodape.php";
?>
    