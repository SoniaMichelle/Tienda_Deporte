<?php
session_start();
require_once '../app/Conexion.php';
$c = new Conectar();
$conexion = $c->conexion();
if (!isset($_GET['texto'])) {
    header('Location: ./index2.php');
}

?>
<div class="site-wrap">
<?php include("../layouts/header.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Product -->
                <section class="bg0 pt-2 pb-3">
                    <div class="container">
                        <div class="pb-3">
                            <h3 class="ltext-103 cl5 text-center">
                                Buscar resultados para <?php echo $_GET['texto'] ?>
                            </h3>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="flex-w flex-l-m filter-tope-group mt-3">
                                    <?php
                                    $re = $conexion->query("select * from categorias");
                                    while ($f = mysqli_fetch_array($re)) {
                                    ?>
                                        <a href="busqueda.php?texto=<?php echo $f['nombre'] ?>">
                                            <button class="stext-106 cl6 hov1 bor3 trans-04 mr-3 ">
                                                <?php
                                                echo $f['nombre'];
                                                ?>
                                            </button>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>

                        <!-- SEECION DE PRODUCTOS -->
                        <div class="row mt-5 mb-5 isotope-grid">
                            <?php
                            /* Buscar coincidencias */
                            $reultado = $conexion->query("select productos.*, categorias.nombre as categoria from productos 
                            inner join categorias on productos.id_categoria =  categorias.id
                            where 
                            productos.nombre like '%" . $_GET['texto'] . "%' or
                            productos.descripcion like '%" . $_GET['texto'] . "%' or
                            productos.talla like '%" . $_GET['texto'] . "%' or
                            categorias.nombre like '%" . $_GET['texto'] . "%' or
                            productos.color like '%" . $_GET['texto'] . "%' 
                           
                            
                            order by id desc limit 10") or die($conexion->error);
                            if (mysqli_num_rows($reultado) > 0) {
                                /* Convierte la variable resultado en un arreglo */
                                while ($fila = mysqli_fetch_array($reultado)) {
                            ?>
                                    <div class="col-sm-6 col-md-4 col-lg-4 pb-5 isotope-item women">
                                        <!-- Block2 -->
                                        <div class="block2">
                                            <div class="block2-pic hov-img0">
                                                <figure class="block-4-image">
                                                    <a href="detalles.php?id=<?php echo $fila['id']; ?>">
                                                        <img src="../raw/img/<?php echo $fila['imagen']; ?>" alt="<?php echo $fila['imagen']; ?>" class="img-fluid">
                                                    </a>
                                                </figure>

                                                <a href="cart.php?id=<?php echo $fila['id']; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                                    ADD CARD
                                                </a>
                                            </div>
                                            <div class="block2-txt d-flex">
                                                <div class="block-4-text p-2">
                                                    <h3><a href="detalles.php?id=<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></a></h3>
                                                    <p class="mb-0"><?php echo $fila['descripcion']; ?></p>
                                                    <p class="text-primary font-weight-bold">$<?php echo $fila['precio']; ?></p>
                                                </div>
                                                <div class="col d-flex justify-content-end">
                                                    <div class="block2-txt-child2 flex-r pt-3 ">
                                                        <a href="#" class="btn-addwish-b2 dis-block pos-relative js-heart">
                                                            <img class="icon-heart1 dis-block trans-04" src="../raw/img/icons/icon-heart-1.png" alt="ICON">
                                                            <img class="icon-heart2 dis-block trans-04 ab-t-l" src="../raw/img/icons/icon-heart-2.png" alt="ICON">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                                }
                            } else {
                                echo '<h2">Sin resultados</h2>';
                            }
                            ?>
                        </div>
                </section>
            </div>
        </div>
    </div>
</div>
<?php include("../layouts/footer.php"); ?>
</body>

</html>