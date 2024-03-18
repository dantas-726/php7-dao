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

/* Carrega 1 usuário usando login e a senha
$usuario = new Usuario();
$usuario->login("Teste", "123456");
$echo = $usuario; 
*/

/* Criando um novo usuário
$aluno = new Usuario("usuario teste2", "senhateste");
$aluno->insert();
echo $aluno; */

/* Alterar um usuario
$usuario = new Usuario(); 
$usuario->loadById(8);
$usuario->update("Pedro Dantas", "Senha do pedro");
echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;