<?php

require_once("config.php")  ;

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM  tb_usuarios");

// echo json_encode($usuarios);

$userr = new Usuario();

$userr->loadById(5);

echo $userr;