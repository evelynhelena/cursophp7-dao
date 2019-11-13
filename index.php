<?php 

require_once("config.php");



/*$root = new Usuario(); // traz um usuario só
$root->loadbyId(10);
echo $root;*/


/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);*/

/*$lista = Usuario::getList();//lista todos os usuarios do banco
echo json_encode($lista);*/

/*$busca = Usuario::search("Ev");// traz todos os usurios que começam com EV
echo json_encode($busca);*/

$usuario = new Usuario();
$usuario->login("Evelyn","123456");

echo ($usuario);

?>