<?php
include "config.php";

function conexao($servidor = SERVIDOR, $usuario = USUARIO, $senha = SENHA, $banco = BANCO){
  $con = mysqli_connect($servidor,$usuario,$senha, $banco);	

  // Check connection
  if ($con->connect_error) {
      $falha = die("Connection failed: " . $con->connect_error);
      return $falha;
    } else {
      return $con;
    }
}


?>