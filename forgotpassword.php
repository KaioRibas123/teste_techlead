<?php

if (isset($_POST["forgotpass"])){
		$conexao= new mysqli("localhost", "root","", "test");
		$usuario = $conexao->real_escape_string($_POST["usuario"]);

		$data = $conexao->query("SELECT id FROM cadastro WHERE usuario='$usuario'");

		if ($data->num_rows > 0){
			$str= "0123456789qwertyyuiokkgffasdasdsvcvd";
			$str = str_shuffle($str);
			$str = substr($str, 0, 9);
			$url = "http://gmail.com/resetpassword.php?token=$str&usuario=$usuario";

			 
            mail($usuario, "Reset Password", "To Reset the Password, Please Visit: $url", "From: From: kaioribas536@gmail.com\r\n");

			$conexao->query("UPDATE cadastro SET token='$str' WHERE usuario='$usuario'");

		}else{

		}
	}

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password Using PHP and Mysql</title>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!--===============================================================================================-->

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="http://developerguidance.com/contacts/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-color: #FFF;">
			<div class="wrap-login100">
				<form action="forgotpassword.php" method="post" class="login100-form validate-form">
					<span class="login100-form-logo">
						DG
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Forget Password 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter Usuario">
						<input class="input100" type="text" name="usuario" placeholder="usuario" autocomplete="off">
						<span class="focus-input100" data-placeholder="&#xf15a;"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" name="forgotpass" value="Request Password" class="login100-form-btn">
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	
</body>
</html>