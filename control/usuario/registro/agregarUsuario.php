
<?php

require_once "../../../app/Usuario.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $password = sha1($_POST['password']);
  $datos = array(
    "nombre" => $_POST['nombre'],
    "paterno" => $_POST['paterno'],
    "materno" => $_POST['materno'],
    "usuario" => $_POST['usuario'],
    "email" => $_POST['email'],
    "password" => $password
  );
  $usuario = new Usuario();
  echo $usuario->agregarUsuario($datos);
}
?>