<div class="container">

    <fieldset>
        <legend>Clientes</legend>

            <table class="table table-striped table-bordered" style="width:100%" >
            
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Empresa</th>
                    <th>Opcoes</th>
                </tr>
                
            <tbody>
                <?php foreach ($clientes as $cliente) :?>
                    <tr>
                        <td>
                            <a href="editarCliente.php ?id=<?php echo $cliente['id']; ?>">
                                <?php echo $cliente['nome']; ?>
                            </a>
                        </td>
                        <td><?php echo $cliente['email'];?></td>
                        <td><?php echo $cliente['empresa']; ?></td>
                        <td>
                            <a class="btn btn-primary" type=button 
                           href="removerCliente.php?id=<?php echo $cliente['id'];?>">
                                Remover
                            </a>    
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
    
        </table>
    
    </fieldset> 
</div>    
