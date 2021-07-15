<?php
session_start();
require_once '../app/Conexion.php';
$c = new Conectar();
$conexion = $c->conexion();

if (isset($_SESSION['carrito'])) {
  /* Si existe buscamos si ya esta agregado el producto */
  if (isset($_GET['id'])) {
    $arreglo = $_SESSION['carrito'];
    $encontro = false;
    $numero = 0;
    for ($i = 0; $i < count($arreglo); $i++) {
      if ($arreglo[$i]['Id'] == $_GET['id']) {
        $encontro = true;
        $numero = $i;
      }
    }
    if ($encontro == true) {
      $arreglo[$numero]['Cantidad'] = $arreglo[$numero]['Cantidad'] + 1;
      $_SESSION['carrito'] = $arreglo;
      header('Location: ./cart.php');
    } else {
      /* Si el registro no se encuentra creamos nuevas variables y un nuevo arreglo */
      $nombre = "";
      $precio = "";
      $imagen = "";
      $res = $conexion->query("select * from productos where id=" .$_GET['id']);
      $fila = mysqli_fetch_row($res);
      $nombre = $fila[1];
      $precio = $fila[3];
      $imagen = $fila[4];
      $arregloNuevo = array(
        'Id' => $_GET['id'],
        'Nombre' => $nombre,
        'Precio' => $precio,
        'Imagen' => $imagen,
        'Cantidad' => 1
      );
      /* 1.Agregar cosas  2.Lo que vamos a poner  */
      array_push($arreglo, $arregloNuevo);
      $_SESSION['carrito'] = $arreglo;
    }
  }
} else {
  /* Sino existe el producto creamos una nueva variable de sesion nueva  */
  if (isset($_GET['id'])) {
    $nombre = "";
    $precio = "";
    $imagen = "";
    $res = $conexion->query("select * from productos where id=" . $_GET['id']);
    $fila = mysqli_fetch_row($res);

    $nombre = $fila[1];
    $precio = $fila[3];
    $imagen = $fila[4];
    $arreglo[] = array(
      'Id' => $_GET['id'],
      'Nombre' => $nombre,
      'Precio' => $precio,
      'Imagen' => $imagen,
      'Cantidad' => 1
    );
    array_push($arreglo, $arregloNuevo);
    $_SESSION['carrito'] = $arreglo;
    header('Location: ./cart.php');
  }
}
?>