   <?php 
    include "banco.php";
    include "ajudantes.php";
    $exibir_tabela=false;
        $empresa =array();
    $empresa['id'] =$_GET['id'];
    if(tem_post())
    {
        
        $empresa['nome'] = $_POST['nome'];
        if($_POST['telefone']){
            $empresa['telefone'] = $_POST['telefone'];
        }else $empresa['telefone'] = '';
        if($_POST['endereco']){
            $empresa['endereco'] = $_POST['endereco'];
        }else $empresa['endereco'] = '';
    
        editar_empresa($conexao, $empresa);
        header('Location: empresas.php');
        die();
   
    }
       $empresa = buscar_empresa($conexao, $_GET['id']);

include("templateEmpresa.php");
?>