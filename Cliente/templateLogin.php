<?php
    $cabecalho_title="Login" ;
    $cabecalho_css  ='
    <link rel="stylesheet" href="css/index.css">

    ';
include('cabecalho.php');

?>
<div class="box">
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
        <input type="submit" name="entrar" value="Entrar">
        <a id ="registrar "href="">Registrar</a>
                        
    </form>
</div>
<?php include('rodape.php')?>

     