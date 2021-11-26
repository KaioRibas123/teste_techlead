<?php 

include('server.php');

$nome=$_POST['nome'];
$usuario=$_POST['usuario'];
$senha=$_POST['senha'];

$sql = "INSERT INTO cadastro (nome, usuario, senha)
VALUES ('$nome','$usuario','$senha')";

if(mysqli_query($conexao, $sql)){
    echo "cadastrado com sucesso";
}
else {
   echo "ERRO" .mysqli_connect_error($conexao);
}
?>
<html>
    <body>
    <a href="login.php" class="btn-cadastrar">login</a>
    </body>
</html>