<?php

include('server.php');

#executa conexão com o mysql
$link = mysqli_connect($hostname,$usuario,$senha,$bancodedados)
or die('Não e possivel conectar: '.mysqli_error($link));


#verefica se o arquivo foi chamado a partir do formulario 
if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "adicionar")
{
#cria a expressão sql de inserção
$sql = "INSERT INTO livros (nome, autor, datacadastro) VALUES (";
$sql .= "'".$_POST['nome']."' ,";
$sql .= "'".$_POST['autor']."', ";
$sql .= "'".$_POST['datacadastro']."' ";
$sql .= ")";

#executa a expressâo sql no servidor, e armazena o resultado
$result = mysqli_query($link, $sql);

#verifica o sucesso da operação
if(!$result)
{die('erro: '.mysqli_error($link));}

#se a opreção foi reliazada com sucesso, informar na tela
else
 {echo 'A opreção foi realizada com sucesso.';}
}
else if(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "alterar")
{
#cria a expressão sql de alteração 
$sql = "UPDATE livros SET";
$sql .= "nome = '".$_POST['nome']. "', ";
$sql .= "autor = '".$_POST['autor']. "', ";
$sql .= "datacadastro= '".$_POST['datacadastro']."'";
$sql .= "WHERE id = ".$_POST['FormCodigo'];

$result = mysqli_query($link, $sql);

if(!$result)
{die('erro: '.mysqli_error($link));}

else 
{echo 'a operação foi realizada com sucesso.';}

}
elseif(isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "excluir")
{
   $sql = "DELETE FROM livros WHERE id = ".$_REQUEST['buscacodigo'];

   $result = mysqli_query($link, $sql);

   if(!$result)
   {die('erro: '. mysqli_error($link));}

   else {echo 'A operação foi realizada com sucesso.';}
}


?>

<br><A href="inserir.php">Clique aqui para inserir um novo registro.</A>
<br><A href="lista.php">Clique aqui para visualizar os registro.</A>