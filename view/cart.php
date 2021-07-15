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
<?php
include("../layouts/header.php");
?>
<div class="site-wrap">
  <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <form class="col-sm-9" method="post">
          <div class="site-blocks-table">
            <table id="tablaCart">
              <thead>
                <tr>
                  <th class="product-thumbnail">Imagen</th>
                  <th class="product-name">Producto</th>
                  <th class="product-price">Precio</th>
                  <th class="product-quantity">Cantidad</th>
                  <th class="product-total">Total</th>
                  <th class="product-remove">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <!-- Verificamos si existe una variable de secion y si es asi ya 
              se podra imprimir los datos -->
                <?php
                $total=0;
                if (isset($_SESSION['carrito'])) {
                  $arregloCarrito = $_SESSION['carrito'];
                  /* count es como esl lenght */
                  for ($i = 0; $i < count($arregloCarrito); $i++) {
                    $total= $total + ($arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad']);
                ?>
                    <tr>
                      <td class="product-thumbnail">
                        <img src="../raw/img/<?php echo $arregloCarrito[$i]['Imagen']; ?>" alt="Image" class="img-fluid">
                      </td>
                      <td class="product-name">
                        <h2 class="h5 text-black"><?php echo $arregloCarrito[$i]['Nombre']; ?></h2>
                      </td>
                      <td>$<?php echo $arregloCarrito[$i]['Precio']; ?></td>
                      <td>
                        <div class="input-group mb-3" style="max-width: 120px;">
                          <div class="input-group-prepend">
                            <button class="btn btn-outline-primary js-btn-minus btnIncrementar"  type="button">&minus;</button>
                          </div>
                          <input type="text" class="form-control text-center" id="txtCantidad" 
                            data-precio="<?php echo $arregloCarrito[$i]['Precio']; ?>"
                            data-id="<?php echo $arregloCarrito[$i]['Id']; ?>"
                            value="<?php echo $arregloCarrito[$i]['Cantidad']; ?>"
                            placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                          <div class="input-group-append">
                            <button class="btn btn-outline-primary js-btn-plus btnIncrementar"  type="button">&plus;</button>
                          </div>
                        </div>
                      </td>
                      <td class="cant<?php echo $arregloCarrito[$i]['Id'];?>">
                        $<?php echo $arregloCarrito[$i]['Precio'] * $arregloCarrito[$i]['Cantidad']; ?></td>
                      <td><a href="#" class="btn btn-primary btn-sm" id="btn_eliminar" data-id="<?php echo $arregloCarrito[$i]['Id']; ?>">X</a></td>
                    </tr>
                <?php }
                } ?>

              </tbody>
            </table>
          </div>
        </form>
        <div class="col-sm-3 pl-2 mt-5">
          <div class="row justify-content-end">
            <div class="col-md-9">
              <div class="row">
                <div class="col-md-12 text-right border-bottom mb-5">
                  <h3 class="text-black h4 text-uppercase">Total Carrito</h3>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-6">
                  <span class="text-black">Subtotal</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">$<?php echo $total?></strong>
                </div>
              </div>
              <div class="row mb-5">
                <div class="col-md-6">
                  <span class="text-black">Total</span>
                </div>
                <div class="col-md-6 text-right">
                  <strong class="text-black">$<?php echo $total?></strong>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Pagar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="row">
          <div class="col-md-12">
            <div class="row mb-5">
              <div class="col-md-5 mb-3 mb-md-0">
                <button class="btn btn-primary btn-sm btn-block">Actualizar</button>
              </div>
              <div class="col-md-7">
                <button class="btn btn-outline-primary btn-sm btn-block">Continuar compra</button>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <?php include("../layouts/footer.php"); ?>
</div>
<script src="../manager/manager_btnEliminar.js"></script>
</body>

</html>