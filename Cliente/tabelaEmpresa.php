<fieldset>
    <legend>Empresas</legend>
    <table>
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Endereco</th>
        <th>
            <th>Opcoes</th>
    </tr>
    <?php foreach ($empresas as $empresa) :?>
    <tr>
         <td><?php echo $empresa['nome']; ?></td>
         <td><?php echo $empresa['telefone'];?></td>
         <td><?php echo $empresa['endereco']; ?></td>
        
        <td>
            <a  class="btn btn-primary" type=button 
               href="editarEmpresa.php?id=<?php echo $empresa['id']; ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Editar</a>

         
        </td>
         
        <td>
            <a class="btn btn-primary" type=button href="removerEmpresa.php?id=<?php echo $empresa['id'];?>">
            Remover</a>    
        </td>
    </tr>
        <?php endforeach; ?> 
    </table>
</fieldset> 
