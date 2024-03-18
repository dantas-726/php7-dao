<?php

require_once("config.php")  ;

/* $sql = new Sql();
 $usuarios = $sql->select("SELECT * FROM  tb_usuarios");
 echo json_encode($usuarios); */



/* Carrega apenas 1 usuário 
$userr = new Usuario();
$userr->loadById(5);
echo $userr; */

/* Carrega uma lista de usuários 
$lista = Usuario::getList();
echo json_encode($lista); */


/* Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("pe");
echo json_encode($search) ;
*/

// Carrega 1 usuário usando login e a senha

$usuario = new Usuario();
$usuario->login("Teste", "123456");

$echo = $usuario;

