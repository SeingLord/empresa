<?php
    $cabecalho_title="Login" ;
    $cabecalho_css  ='
    <link rel="stylesheet" href="assets/index.css">

    ';
include('cabecalho.php');

?>
<div class='box'>
    <span id="entrar"></span>
    <h2>Entrar</h2>
    <form method = "post">
        <div class="inputBox">
            <input type="type" name="email" required>
            <label>Email</label>
        </div>
        <div  class="inputBox">
            <input type="password" name="senha" required="">
            <label>Senha</label>
        </div>
        <a href="../assets/index.css"></a>
        <input type="submit" name="entrar" value="Entrar">
        <a id ="registrar "href="">Registrar</a>
        <?php  if($tem_erros && isset( $erros_validacao['conta'])) :?> 
            <span class="alert alert-danger erro" role="alert">
                
                    <?php echo $erros_validacao['conta']; ?>  

            </span>
            <?php endif; ?>
        </form>
</div>
        

<?php include('rodape.php')?>

     