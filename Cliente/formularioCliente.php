<fieldset>
<legend>Cadastrar Cliente</legend>
    <form method="post">     
    <label>
    Nome
    <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>" />
    </label>
    
    <label>
        Email
        <input type = "text" name="email" value = "<?php echo $cliente['email'];?>"/>
    </label>
    <label>
        Empresa
    <input list="empresas" name='empresa' >

       

        <datalist id="empresas">
          <?php foreach ($empresas as $empresa) :?>
            <option value="<?php echo $empresa['id'];?>"
                    label="<?php echo $empresa['nome'];?>">
                    <?php endforeach;?>
        </datalist>
    </label>

    <input class="btn btn-primary" type="submit" type="Registrar" 
               value = "<?php echo (($cliente['id'])>0) ?
                    "Atualizar" : "Cadastrar" ; ?>"
            />
            <a class="btn btn-primary" type=button href="menu.php">Menu</a>

</form>
    </fieldset>
