<div class="container">

    <fieldset>
    <legend>Cadastrar Cliente</legend>
        <form method="POST">
            
            <label>
                Nome
                <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>" />
            </label>
            <label>Email
                <input type = "text" name="email" value = "<?php echo $cliente['email'];?>"/>
            </label>
            <label>
                Empresa
                <select name='empresa' >
                    <?php foreach ($empresas as $empresa) :?>
                    <option value ="<?php echo $empresa['id'];?>"
                            <?php 
                            echo ($cliente['id'] == $empresa['id'])?
                                    "selected":'';
                            ?>>
                        
                            <?php echo $empresa['nome'];?>
                        </option>
                    <?php endforeach;?>
                    
                </select>

            </label>
            
            <input class="btn btn-primary" type="submit" type="Registrar" value = 
                   "<?php echo (($cliente['id'])>0) ?"Atualizar" : "Cadastrar" ; ?>"/>
            
            <a class="btn btn-primary" type=button 
               href="<?php echo (($cliente['id'])>0) ?
               "clientes.php" : "menu.php" ; ?>">
               <?php echo (($cliente['id'])>0) ? 
                    "Voltar" : "Menu" ;
                ?>
            </a>  

            <?php 
                if($tem_erros && isset(               $erros_validacao['nome'])) : ?>
                    <span class='alert alert-danger erro'>
                        <?php echo $erros_validacao['nome']; ?>
                    </span>
                <?php endif; ?>

        </form>

    </fieldset>
</div>

