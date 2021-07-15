<?php
session_start();
require_once '../app/Conexion.php';
$c = new Conectar();
$conexion = $c->conexion();
?>
<div class="site-wrap">
  <?php include("../layouts/header.php"); ?>
  <div class="bg-light py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-0"><a href="index2.php">Home</a> <span class="mx-2 mb-0">/</span>
          <strong class="text-black"><a href="tienda.php">Shop</a> <span class="mx-2 mb-0"></strong>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col">
        <!-- Product -->
        <section class="bg0 pt-2 pb-3">
          <div class="container">
            <div class="pb-3">
              <h3 class="ltext-103 cl5 text-center">
                SPORT
              </h3>
            </div>
            <div class="row justify-content-end">
              <div class="col col-md-4 order-2 order-md-1 site-search-icon text-left">
                <form action="./busqueda.php" class="site-block-top-search" method="GET">
                  <span class="icon icon-search2">
                  <input type="text" class="form-control border-0" placeholder="Search" name="texto">
                  </span>
                </form>
              </div>
            </div>
            <!-- SEECION DE PRODUCTOS -->
            <div class="row mb-5 isotope-grid">
              <?php
              $limite = 12; //productos por pagina
              $totalQuery = $conexion->query('select count(*) from productos');
              $totalProductos = mysqli_fetch_row($totalQuery);
              $totalBotones = round($totalProductos[0] / $limite);
              if (isset($_GET['limite'])) {
                $reultado = $conexion->query("select * from productos order by id desc limit 100") or die($conexion->error);
              } else {
                $reultado = $conexion->query("select * from productos order by id DESC limit 100") or die($conexion->error);
              }
              /*  die($totalBotones); */
              /* Convierte la variable resultado en un arreglo */
              while ($fila = mysqli_fetch_array($reultado)) {
              ?>
                <div class="col-sm-6 col-md-4 col-lg-4 pb-5 text-center">
                  <!-- Block2 -->
                  <div class="block2">
                    <div class="block2-pic hov-img0">
                      <figure class="block-4-image">
                        <a href="detalles.php?id=<?php echo $fila['id']; ?>">
                          <img src="../raw/img/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['imagen']; ?>" class="img-fluid" data-filter="*">
                        </a>
                      </figure>
                      <!-- <a href="cart.php?id=<?php /* echo $fila['id'];  */?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 trans-04">
                        Añadir carrito
                      </a>  -->
                    </div>
                    <div class="block2-txt d-flex">
                      <div class="block-4-text p-2">
                        <h3><a href="detalles.php?id=<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></a></h3>
                        <p class="mb-0"><?php echo $fila['descripcion']; ?></p>
                        <p class="text-primary font-weight-bold">$<?php echo $fila['precio']; ?></p>
                      </div>
                      <!-- <div class="col d-flex justify-content-end">
                        <div class="block2-txt-child2 flex-r pt-3 ">
                          <a href="#" class="btn-addwish-b2 dis-block pos-relative js-heart">
                            <img class="icon-heart1 dis-block trans-04" src="../raw/img/icons/icon-heart-1.png" alt="ICON">
                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="../raw/img/icons/icon-heart-2.png" alt="ICON">
                          </a>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
            </div>
            <div class="row" data-aos="fade-up">
              <div class="col-md-12 text-center">
                <div class="site-block-27">
                  <ul>
                    <li><a href="#">&lt;</a></li>
                    <?php
                    for ($k = 0; $k < $totalBotones; $k++) {
                      echo '<li><a href="tienda.php?limite=' . ($k * 12) . '">' . ($k + 1) . '</a></li>';
                    }
                    ?>
                    <li><a href="#">&gt;</a></li>
                  </ul>
                </div>
              </div>
            </div>
        </section>
      </div>
    </div>
  </div>
</div>
<?php include("../layouts/footer.php"); ?>
</body>

</html>