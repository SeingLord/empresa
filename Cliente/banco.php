<?php
    include "config.php";
   $conexao = mysqli_connect(BD_SERVIDOR,BD_USUARIO,BD_SENHA,BD_BANCO);
    if(mysqli_errno($conexao)){
        echo "Erro no banco de dados";
        die();
    }

function buscar_clientes($conexao){
        $sqlBuscar = "select c.id, c.nome, 
            c.email,
            e.nome as empresa
            from clientes c 
            join empresa e on c.fk_id=e.id";
        $resultado = mysqli_query($conexao, $sqlBuscar);
        $clientes = array();
        while($cliente = mysqli_fetch_assoc($resultado)){
            $clientes[] = $cliente;
        }
    return $clientes;

}
function buscar_cliente($conexao, $id){
    $sqlBusca = "
            select c.id, c.nome, 
            c.email,
            e.nome as empresa
            from clientes c 
            join empresa e on c.fk_id=e.id
            where c.id={$id}";
    
    $resultados = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultados);
}
function gravar_cliente($conexao, $clientes){

    $sqlInsere = "insert into clientes 
    (nome,email, fk_id)
    values
    (
    '{$clientes['nome']}',
    '{$clientes['email']}',
    '{$clientes['fk_id']}'
    )";
    mysqli_query($conexao,$sqlInsere);
}

function editar_cliente($conexao, $cliente){
    var_dump($cliente);
    $sqlEditar = "
     UPDATE clientes SET 
        nome ='{$cliente['nome']}',
        email  = '{$cliente['email']}',
        fk_id = '{$cliente['fk_id']}'
        where id ='{$cliente['id']}';
    
    
    
    ";
    mysqli_query($conexao,$sqlEditar);
}
function remover_cliente($conexao, $id){
    $sqlRemover = "delete from clientes where id= {$id}";
    mysqli_query($conexao,$sqlRemover);
}

/*  Empresa */
function buscar_empresas($conexao){
        $sqlBuscar = "select * from empresa";
        $resultado = mysqli_query($conexao, $sqlBuscar);
        $empresas = array();
        while ($empresa = mysqli_fetch_assoc($resultado))
     {
         $empresas[] = $empresa; 
     }

    return $empresas;

}

function buscar_empresa($conexao, $id){
    $sqlBusca = "select * from empresa where id={$id}";
    
    $resultados = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultados);
}

function buscar_empresa_nome($conexao,$nome){
    $sqlBusca = "select * from empresa where nome = {$nome}";
    $resultados = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultados);
}
function gravar_empresa($conexao, $empresa){
    $sqlInsere = "insert into empresa 
    (nome,endereco, telefone)
    values
    (
    '{$empresa['nome']}',
    '{$empresa['endereco']}',
    '{$empresa['telefone']}'
    )";
    mysqli_query($conexao,$sqlInsere);
}
function editar_empresa($conexao, $empresa){
    $sqlEditar = "
    UPDATE empresa SET 
        nome     =  '{$empresa['nome']}',
        telefone =  '{$empresa['telefone']}',
        endereco    =  '{$empresa['endereco']}'    
        where 
        id =    '{$empresa['id']}'
    
    ";
    mysqli_query($conexao,$sqlEditar);
}
function remover_empresa($conexao, $id){
    $sqlRemover = "delete from empresa where id= {$id}";
    mysqli_query($conexao,$sqlRemover);
}

/*Administrador*/
function buscar_conta($conexao, $conta){
    var_dump($conta);
    $sqlBusca = "select * from adminstrador where email ='{$conta['email']}' and 
    senha = '{$conta['senha']}'";
    
    $resultados = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultados);
}
          
?>