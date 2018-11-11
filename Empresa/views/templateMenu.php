<?php
  $cabecalho_title="Menu" ;
    $cabecalho_css  =' 
        <link  rel="stylesheet" href="../assets/templateMenu.css">

    ';
    include('cabecalho.php');

?>
<div class="box">
    <a class="btn btn-primary" href="empresas.php" role="button">Empresa</a>
    <a class="btn btn-primary" href="clientes.php" role="button">Cliente</a>
    
    <a class= "btn btn-primary sair" "" href="../index.php" role="button">Sair</a>

</div>
    
    <?php 
    include "rodape.php";
?>