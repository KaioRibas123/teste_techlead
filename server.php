<?php

error_reporting(0);
$hostname = "localhost";
$bancodedados = "test";
$usuario = "root";
$senha = "";

$conexao = new mysqli($hostname,$usuario,$senha,$bancodedados);
if ($conexao->connect_errno){
  echo "falha ao conectar: (" . $conexao->connect_errno . ") " . $conexao->connect_error;

} 