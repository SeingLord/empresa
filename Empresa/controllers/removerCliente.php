<?php 
    include __DIR__."/../models/banco.php";
    remover_cliente($conexao, $_GET['id']);
    header("Location: clientes.php");

?>