<?php
  
  session_start();
  require_once "../../../app/Usuario.php";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $password = sha1($_POST['password']);
    

  $usuarioObj = new Usuario();
  /* SE INICIA LE SECION SI EL USUARIO SE LOGUEA EXITOSAMENTE */
  echo $usuarioObj->login($usuario,$password);
  }
?>