<?php

include ('server.php');
#executa conexão com o mysql
$link = mysqli_connect($hostname,$usuario,$senha,$bancodedados)
or die('Não e possivel conectar:'.mysqli_error($link));

#restricao 
session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: usuario.php?erro=true');
    exit;
}


$sql = "SELECT * FROM livrousuario";

?>

<html>
    <h3>Tabela de registro dos Usuarios</h3>
    <table border=2>
        <tr>
    
            <td>id_usuario.</td>
            <td>Livro</td>
            <td>Autor</td>
            <td>Data Cadastro</td>
        </tr>
       

    <?php
    $result = mysqli_query($link,$sql);
    while ($tbl = mysqli_fetch_array($result))
    {
     
     $Codigo1      =$tbl["id_usuario"];
     $Livro        = $tbl["nome"];
     $Autor        = $tbl["autor"];
     $DataCadastro = $tbl["datacadastro"]; 


     echo "<tr>";
     echo "<td>$Codigo1 ";
     echo "<A href=\"usuario.php?acao=editar&buscacodigo=$Codigo1\">";
     echo "(Editar)</A>";
     echo"<A href=\"gerenciandoregistro.php?acao=excluir&buscacodigo=$Codigo1\">";
     echo "(excluir)</A>";
     echo  "</td>";
     echo "<td>$Livro</td>";
     echo "<td>$Autor</td>";
     echo "<td>$DataCadastro</td>";
     echo "</tr>";

    }
    ?>
    </table>

    <br>
    <br>

<?php

include ('server.php');
#executa conexão com o mysql
$link = mysqli_connect($hostname,$usuario,$senha,$bancodedados)
or die('Não e possivel conectar:'.mysqli_error($link));

#restricao 
session_start();

if(!isset($_SESSION['usuario'])){
    header('Location: usuario.php?erro=true');
    exit;
}


$sql = "SELECT * FROM livros";

?>

<html>
<h3>Tabela registro do Administrador</h3>
    <table border=1>
        <tr>
            <td>Cod.</td>
            <td>Livro</td>
            <td>Autor</td>
            <td>Data Cadastro</td>
        </tr>

    <?php
    $result = mysqli_query($link,$sql);
    while ($tbl = mysqli_fetch_array($result))
    {
     $Codigo       = $tbl["id"];
     $Livro        = $tbl["nome"];
     $Autor        = $tbl["autor"];
     $DataCadastro = $tbl["datacadastro"]; 

     echo "<tr>";
     echo "<td>$Codigo ";
     echo  "</td>";
     echo "<td>$Livro</td>";
     echo "<td>$Autor</td>";
     echo "<td>$DataCadastro</td>";
     echo "</tr>";
    }
    ?>
    </table>
</html>
