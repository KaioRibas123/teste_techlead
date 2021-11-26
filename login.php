<?php
include('server.php');
session_start();
#restrição para administrador
if ($_REQUEST["action"]=="login") {
    if($_POST['usuario'] == "admin" && $_POST['senha'] == "123456")
    {
        $_SESSION["usuario"] = $_POST["usuario"];
        $_SESSION["autenticado"] = TRUE;
        header('Location: inserir.php');
    }
    else {
        $usuario = $_POST["usuario"];
        $senha   = $_POST["senha"];

        $_SESSION['usuario_user'] = $usuario;
        $_SESSION['senha_user'] = $senha;

        if (isset($_SESSION['usuario_user']) && isset($_SESSION['senha_user'])) {
            $sql = mysqli_query($conexao,"SELECT * FROM cadastro WHERE usuario ='$usuario'");
            while($dados = mysqli_fetch_array($sql)){
                header('Location: usuario.php');
            } 
               echo"Você não tem cadastro";

            
        }
        
      }
       
    }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet">
    <title>Teste Techlead</title>
</head>
<body>
   

   <form action="login.php?action=login" method="POST">
       <input type="text" name="usuario" placeholder="">
       <input type="password" name="senha" placeholder="">
       <input type="submit" id="submit" value="autenticar">


   </form>
   

    <!--linha-->
        <div class="justify-center">
            <hr>
        </div>
    <!--Bloco de cadastra-se--> 
        <p>
            <a href="cadastro.php">Cadastra-se</a>
            
        </p>
    <!--Bloco esqueci minha senha-->
        <p>
            <a href="forgotpassword.php">Esqueci minha senha</a>
        </p>

           </div>
        </div>
    </div>
</body>
</html>
