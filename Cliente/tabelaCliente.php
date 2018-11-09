
<fieldset>
    <legend>Clientes</legend>
    <table>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Empresa</th>
        <th><th>Opcoes</th>
    </tr>
    <?php foreach ($clientes as $cliente) :?>
    <tr>

         <td><?php echo $cliente['nome']; ?></td>
         <td><?php echo $cliente['email'];?></td>
         <td><?php echo $cliente['empresa']; ?></td>
    <td>
         <a class="btn btn-primary" type=button 
            href="editarCliente.php ?id=<?php echo $cliente['id']; ?>">Editar
        </a>
    </td>
        
    <td>

        <a class="btn btn-primary" type=button 
           href="removerCliente.php?id=<?php echo $cliente['id'];?>">
            Remover
        </a>    
    </td>
    </tr>
    <?php endforeach; ?> 
</table>
    </fieldset> 
