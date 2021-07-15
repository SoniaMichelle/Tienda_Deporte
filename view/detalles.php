<?php
session_start();
require_once '../app/Conexion.php';
$c = new Conectar();
$conexion = $c->conexion();

if (isset($_GET['id'])) {
  $resultado = $conexion->query("select * from productos where id=".$_GET['id']);
  if (mysqli_num_rows($resultado) > 0) {
    $fila = mysqli_fetch_row($resultado);
  }else{
    header('Location: ./tienda.php');
  }
}else{
  /* Redireccionar */
  header('Location: ./tienda.php');
}
include("../layouts/header.php");
?>

<div class="site-wrap">
  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="../raw/img/<?php echo $fila[4];?>" alt="<?php echo $fila[1];?>" class="img-fluid">
        </div>
        <div class="col-md-6">
          <h2 class="text-black"><?php echo $fila[1];?></h2>
          <p><strong class="text-primary h4">$<?php echo $fila[3];?></strong></p>
         <p><?php echo $fila[2];?></p>
          <div class="mb-1 d-flex">
            <label class="mr-sm-2" for="inlineFormCustomSelect"><?php echo $fila[7];?></label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected>Seleccione una talla</option>
              <option value="1">Talla S</option>
              <option value="2">Talla M</option>
              <option value="3">Talla L</option>
              <option value="3">Talla XL</option>
            </select>
            <label class="mr-sm-2" for="inlineFormCustomSelect">Color</label>
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
              <option selected>Seleccione un color</option>
              <option value="1">Negro</option>
              <option value="2">Gris</option>
              <option value="3">Rosa</option>
            </select>
          </div>
          <div class="row">
            <div class="col mt-5 text-center">
            <p><a href="cart.php?id=<?php echo $fila[0]?>" class="buy-now btn btn-sm btn-primary">Añadir al car</a></p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  
  <div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 site-section-heading text-center pt-4">
          <h2>Prductos relacionados</h2>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12">
        <div class="nonloop-block-3 owl-carousel">
          <?php
          if (isset($_GET['limite'])) {
            $reultado = $conexion->query("select * from productos order by id desc limit 6") or die($conexion->error);
          } else {
            $reultado = $conexion->query("select * from productos order by id DESC limit 6") or die($conexion->error);
          }
          while ($fila = mysqli_fetch_array($reultado)) {
          ?>
            <div class="item">
              <div class="block-4 text-center">
                <div class="block2-pic hov-img0">
                  <figure class="block-4-image">
                    <a href="detalles?id=<?php echo $fila['id']; ?>">
                      <img src="../raw/img/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['imagen']; ?>" class="img-fluid" data-filter="*">
                    </a>
                  </figure>
                </div>
                <div class="block2-txt text-center">
                  <div class="block-4-text p-4">
                    <h3><a href="detalles.php?id=<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></a></h3>
                    <p class="mb-0"><?php echo $fila['descripcion']; ?></p>
                    <p class="text-primary font-weight-bold">$<?php echo $fila['precio']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
<?php include("../layouts/footer.php"); ?>
</body>
</html>