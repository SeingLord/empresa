<fieldset>
    <legend>Cadastrar Empresa</legend>
<form method ="post"> 
       <input type="hidden" name="id" value="<?php echo $empresa['id']; ?>" />
    <label>
    Nome
    <input type="text" name="nome" value="<?php echo $empresa['nome']; ?>" />
    </label>
    
    <label>
        Telefone
        <input type = "text" name = "telefone" value = "<?php echo $empresa['telefone'];?>"/>
    </label>
    
    <label>
        Endereco
        <input type="text" name='endereco' value='<?php echo $empresa['endereco']?>'
        />
    </label>
    
    <input class ="btn btn-primary " type="submit" type="Registrar" 
               value = "<?php echo (($empresa['id'])>0) ?
                    "Atualizar" : "Cadastrar" ; ?>"
            />
    <a class="btn btn-primary" type=button href="menu.php">Menu</a>
</form>
    </fieldset>
