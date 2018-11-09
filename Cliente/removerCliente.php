<?php 
    include "banco.php";
    remover_cliente($conexao, $_GET['id']);
    header("Location: clientes.php");

?>