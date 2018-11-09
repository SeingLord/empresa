<form> 
    <?php var_dump($_GET)?>
       <input type="hidden" name="id" />
    <label>
    Nome
    <input type="text" name="nome"/>
    </label>
    
    <label>
        Email
        <input type = "text" name="email" >
    </label>
    <label>
        Empresa
    <input list="empresas" name='empresa'>

        <datalist id="empresas">
            <select >
          <?php foreach ($empresas as $empresa) :?>
            <option value="<?php echo $empresa['id']; label="SDSD"?>">
                
            
            </option>
        </select>

        </datalist>
    </label>
    
    <input type="submit" type="Registrar" 
               value="Registrar">
            
</form>