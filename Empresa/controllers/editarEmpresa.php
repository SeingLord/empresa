   <?php 
   include __DIR__."/../helpers/ajudantes.php";
    include __DIR__."/../models/banco.php";
    $exibir_tabela=false;
    $tem_erros=false;
    $erros_validacao = array();
    $empresa =array();
    $empresa['id'] =$_GET['id'];
    if(tem_post())
    {
        if(isset($_POST['nome'])&& strlen($_POST['nome'])>0){
            $empresa['nome'] = $_POST['nome'];
        }
        else 
        {
            $tem_erros=true;
            $erros_validacao['nome'] = "O nome da empresa é obrigatorio!";
        }
        if($_POST['telefone']){
            $empresa['telefone'] = $_POST['telefone'];
        }else $empresa['telefone'] = '';
        if($_POST['endereco']){
            $empresa['endereco'] = $_POST['endereco'];
        }else $empresa['endereco'] = '';
        if(! $tem_erros){
            editar_empresa($conexao, $empresa);
            header('Location: empresas.php');
            die();
        }

   
    }
    $empresa = buscar_empresa($conexao, $_GET['id']);

    include __DIR__. "/../views/templateEmpresa.php";
?>