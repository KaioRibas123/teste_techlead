<?php

if (isset($_GET["usuario"]) && isset($_GET["token"])) {
$conexao= new mysqli("localhost", "root","", "test");
    $usuario = $conexao->real_escape_string($_GET["usuario"]);
    $token = $conexao->real_escape_string($_GET["token"]);
    $data = $conexao->query("SELECT id FROM cadastro WHERE usuario='$usuario' AND token='$token'");
 if($data->num_rows >0){
             echo "please check your link";
             $str="0123456789qwertyuioplkjhgfdsa";
             $str = str_shuffle($str);
             $str = substr($str, 0, 15); 
 $senha = sha1($str);
             $conexao->query("UPDATE cadastro SET senha='$senha', token='' WHERE usuario='$usuario'");
             echo "Your New Password is $str";
         }else{ 
 header('Location: login.php');
             exit();
         } 
 }else{
     header('Location: login.php');
     exit();
 }  