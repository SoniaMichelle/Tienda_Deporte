<?php
session_start();
include('../layouts/header.php');/*toma todo el texto / código / marcado que existe en el 
							archivo especificado y lo copia en el archivo que usa la declaración de inclusión. */
require_once '../app/Conexion.php';
$c = new Conectar();
$conexion = $c->conexion();
?>
<!-- SLIDER -->
<div class="conatiner">
  <div class="row">
    <div class="col">
      <!-- Slider -->
      <section class="section-slide">
        <div class="wrap-slick1">
          <div class="slick1">
            <div class="item-slick1" style="background-image: url(../raw/img/slider/p4.jpg);">
              <div class="container h-full">
                <div class="flex-col-l-m h-full pt-3 pb-3 respon5">
                  <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                    <span class="ltext-101 cl2 respon2">
                      <h4>Colección Mujer 2021</h4>
                    </span>
                  </div>
                  <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                    <h2 class="ltext-201 cl2 pt-2 pb-3 respon1">
                      NUEVOS ESTILOS
                    </h2>
                  </div>

                  <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                    <a href="productos.php" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 mt-3 trans-04">
                      Ver más
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="item-slick1" style="background-image: url(../raw/img/slider/h3.jpg);">
              <div class="container h-full">
                <div class="flex-col-l-m h-full pt-3 pb-3 respon5">
                  <div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
                    <span class="ltext-101 cl2 respon2">
                      <h4>SIENTETE COMODO</h4>
                    </span>
                  </div>

                  <div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
                    <h2 class="ltext-201 cl2 pt-2 pb-3 respon1">
                      LOS MAS NUEVO
                    </h2>
                  </div>

                  <div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
                    <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 mt-3 trans-04">
                      Ver mas
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="item-slick1" style="background-image: url(../raw/img/slider/h6.jpg);">
              <div class="container h-full">
                <div class="flex-col-l-m h-full pt-3 pb-3 respon5">
                  <div class="layer-slick1 animated visible-false" data-appear="rotateInDownLeft" data-delay="0">
                    <span class="ltext-101 cl2 respon2">
                      <h4>Coleccion Hombre 2021</h4>
                    </span>
                  </div>

                  <div class="layer-slick1 animated visible-false" data-appear="rotateInUpRight" data-delay="800">
                    <h2 class="ltext-201 cl2 pt-2 pb-3 respon1">
                      Lo mas nuevo
                    </h2>
                  </div>

                  <div class="layer-slick1 animated visible-false" data-appear="rotateIn" data-delay="1600">
                    <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 mt-3 trans-04">
                      Ver mas
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
<!-- CARD -->
<div class="site-section site-section-sm site-blocks-1">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
        <div class="icon mr-4 align-self-start">
          <span class="icon-truck"></span>
        </div>
        <div class="text">
          <h2 class="text-uppercase">Envios gratis</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
        <div class="icon mr-4 align-self-start">
          <span class="icon-refresh2"></span>
        </div>
        <div class="text">
          <h2 class="text-uppercase">Devoluciones</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
        <div class="icon mr-4 align-self-start">
          <span class="icon-help"></span>
        </div>
        <div class="text">
          <h2 class="text-uppercase">ATENCIÓN AL CLIENTE</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at iaculis quam. Integer accumsan tincidunt fringilla.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- CATEGORIA -->
<div class="site-section site-blocks-2">
  <div class="container">
    <div class="row">
      <?php
      $re = $conexion->query("select * from categorias");
      while ($f = mysqli_fetch_array($re)) {
      ?>
        <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
          <div class="text-center">
            <h2><a href="busqueda.php?id=<?php echo $f['id']; ?>"><?php echo $f['nombre']; ?></a></h2>
          </div>
          <a class="block-2-item" href="busqueda.php?texto=<?php echo $f['nombre'] ?>">
            <figure class="image">
              <img src="../raw/img/<?php echo $f['imagen']; ?>" alt="<?php echo $f['imagen']; ?>" class="img-fluid">
            </figure>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</div>
</div>
<!-- CARRUCEL PRODUCTOS -->
<div class="site-section block-3 site-blocks-2 bg-light">
  <div class="container">
    <!-- TITULO -->
    <div class="row justify-content-center">
      <div class="col text-center">
        <h3>
          COLECCIÓN VERANO
        </h3>
      </div>
    </div>
    <!-- PRODUCTOS -->
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
<!-- OFERTA -->
<div class="site-section block-3">
  <div class="container">
    <div class="row justify-content-center  mb-5">
      <div class="col-md-7 text-center ">
        <h3>GRAN VENTA!</h3>
      </div>
    </div>
    <div class="row align-items-center">
      <div class="col-md-12 col-lg-7 mb-5">
        <a href="#"><img src="../raw/img/ofertas.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
      </div>
      <div class="col-md-12 col-lg-5 text-center pl-md-5">
        <h2><a href="#">50% OFERTAS</a></h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere corporis ipsum animi deleniti fugiat. Ex, veniam?</p>
        <p><a href="#" class="btn btn-primary btn-sm mt-5">ver más</a></p>
      </div>
    </div>
  </div>
</div>
<!-- FOOTER -->
<?php include('../layouts/footer.php'); ?>