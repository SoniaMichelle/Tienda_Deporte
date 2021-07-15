<?php
session_start();
require_once '../app/Conexion.php';
$c = new Conectar();
$conexion = $c->conexion();

if (!isset($_SESSION['carrito'])) {
  header('Location: ./index2.php');
}
$arreglo = $_SESSION['carrito'];
$total = 0;
for ($i = 0; $i < count($arreglo); $i++) {
  $total = $total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
}
$id_usuario = $_SESSION['usuario'];
$fecha = date('Y-m-d h:m:s');
$conexion->query("insert into ventas(id_usuario,total,fecha) values(3,$total,'$fecha')");
$id_venta = $conexion->insert_id;

for ($i = 0; $i < count($arreglo); $i++) {
  $conexion->query(
    "insert into productos_venta(id_venta,id_producto,cantidad,precio,subtotal)
                  values(
                    $id_venta,
                    " . $arreglo[$i]['Id'] . ",
                    " . $arreglo[$i]['Cantidad'] . ",
                    " . $arreglo[$i]['Precio'] . ",
                    " . $arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio'] . ")"
  );
}
$conexion->query("insert into envios(id_venta,estado,direccion,cp,telefono) values
  (
    $id_venta,
    '" . $_POST['estado'] . "',
    '" . $_POST['direccion'] . "',
    '" . $_POST['cp'] . "',
    '" . $_POST['telefono'] . "'
  )");

unset($_SESSION['carrito']);
echo 1;
?>