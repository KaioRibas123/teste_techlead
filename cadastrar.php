<?php

session_start();


if(!isset($_SESSION["usuario"]))
{
	header('Location:login.php');
}

 include('server.php');

 $link = mysqli_connect($hostname,$usuario,$senha,$bancodedados)
or die('Não e possivel conectar: '.mysqli_error($link));

if (isset($_REQUEST["acao"]) && $_REQUEST["acao"] == "adicionar") {
    #cria a expressão sql de inserção
$sql = "INSERT INTO cadastro (usuario, senha) VALUES (";
$sql .= "'".$_POST['usuario']."' ,";
$sql .= "'".$_POST['senha']."' ";
$sql .= ")";

#executa a expressâo sql no servidor, e armazena o resultado
$result = mysqli_query($link, $sql);

#verifica o sucesso da operação
if(!$result)
{die('erro: '.mysqli_error($link));}

#se a opreção foi reliazada com sucesso, informar na tela
else
 {echo 'A operação foi realizada com sucesso.';}

}

?>

<br><a href="login.php">Retornar para página de login</a>