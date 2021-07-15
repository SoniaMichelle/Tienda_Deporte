<?php
  class Conectar {
    public function conexion(){
      $servidor = "localhost";
      $usuario = "root";
      $password = "";
      $base = "tienda";

      $conexion = mysqli_connect($servidor, $usuario, $password, $base);
      $conexion -> set_charset('utf8');

      return $conexion;
    }
  }
?>