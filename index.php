<?php 

require_once("config.php");

// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);


/*
 * Carrega 1 usuario
 */
// $usuario = new Usuario();
// $usuario->loadById(1);
// echo $usuario;

/*
 * Carrega todos os usuarios
 */
// $lista = Usuario::getList();
// echo json_encode($lista);

/*
 * Carrega uma lista de usuarios pelo login
 */
// $search = Usuario::search("f");
// echo json_encode($search);

/*
 * Carrega um usuario passando o login e a senha
 */
$usuario = new Usuario();
$usuario->login("Renan", "1234");
echo $usuario;

 ?>