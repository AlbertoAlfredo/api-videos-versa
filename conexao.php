<?php
include "config.php";
echo "conexao";

$servidor = $SERVIDOR;
$usuario = $USUARIO;
$senha = $SENHA;
$banco = $BANCO;

if ($banco != "") {
	$con = mysqli_connect($servidor,$usuario,$senha, $banco);	
}
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
?>