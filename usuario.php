<?php

include('server.php');

#executa conexão com o mysql
$link = mysqli_connect($hostname,$usuario,$senha,$bancodedados)
or die('Não e possivel conectar: '.mysqli_error($link));

#verefica se o arquivo foi chamado a partir do formulario 
if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "editar")
{
    $sql = "SELECT * FROM livros WHERE id = ".$_REQUEST['buscacodigo'];

    $result = mysqli_query($link, $sql);

    if($tbl = mysqli_fetch_array($result)){
        
        $Codigo1  = $tbl["id_usuario"];
        $Livro   = $tbl["nome"];
        $Autor   = $tbl["autor"];
        $DataCadastro = $tbl["datacadastro"];
        
    }
    
    else 
    {echo "Registro não encontrado.";}
}

?>


<html>
    <head>
        <title>Gerenciando Registros</title>
    </head>
<h1>Usuario</h1>
<body>
    Preencha os campos abaixo:
<?php
 if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "editar")
 {$AcaoForm = "alterar";}
 {
     $AcaoForm     = "adicionar";
     $Codigo1     = "";
     $Livro        = "";
     $Autor        = "";
     $DataCadastro = "";
 }
?>
    <form method="POST" action="gerenciandoregistro.php?acao=<?php echo $AcaoForm;?>">

    <input type="hidden" name="id_usuario" value ="<?php echo $Codigo1;?>">
        <table>
            <tr>
                <td>Nome do Livro</td>
                <td>
                    <input name="nome" maxlength=64 value="<?php echo $Livro; ?>">
                </td>
            </tr>

            <tr>
                <td>Nome do Autor</td>
                <td>
                    <input name="autor" maxlength=32 value="<?php echo $Autor;?>">
                </td>
            </tr>

            <tr>
                <td>Data Cadastro</td>
                <td>
                    <input name="datacadastro" maxlength=16 value="<?php echo $DataCadastro;?>">
                </td>
            </tr>

            <tr>
                <td colspan=2 align=right>
                    <input type="reset" value="limpar">

    <?php
       if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "editar")
       {$NomeBotao = "Alterar";}
       else
       {$NomeBotao = "Cadastrar";}

    ?>
        <input type="submit" value="<?php echo $NomeBotao;?>">         
            </td>
            </tr>
        </table>
    </form>
</body>
</html>

