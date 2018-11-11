<div class="container">
    <fieldset>
        <legend>Empresas</legend>
        <table  class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Endereco</th>
                    <th>Opcoes</th>
                </tr>
            </thead>


            <tbody>
                <?php foreach ($empresas as $empresa) :?>
                    <tr>
                        <td>
                            <a href="editarEmpresa.php?id=<?php echo $empresa['id']; ?>" >
                                <?php echo $empresa['nome']; ?>
                            </a>
                        </td>
                        <td><?php echo $empresa['telefone'];?></td>
                        <td><?php echo $empresa['endereco']; ?></td>
                        <td>
                            <a class="btn btn-primary" type=button href="removerEmpresa.php?id=<?php echo $empresa['id'];?>">
                                Remover
                            </a>    
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>

        </table>
    </fieldset> 
</div>


