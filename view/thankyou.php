<?php
session_start();

?>
<div class="site-wrap">
  <?php include("../layouts/header.php"); ?>
  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <span class="icon-check_circle display-3 text-success"></span>
          <h2 class="display-3 text-black">¡Gracias por su compra!</h2>
          <p class="lead mb-5">Su pedido se completó correctamente.</p>
          <p><a href="./tienda.php" class="btn btn-sm btn-primary"><i class="fas fa-undo-alt mr-3"></i>Volver a la tienda</a></p>
        </div>
      </div>
    </div>
  </div>
  <?php include("../layouts/footer.php"); ?>
</div>
</body>

</html>