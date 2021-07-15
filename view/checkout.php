<?php
session_start();
/* Si el usuario no a añadido ninguna compra al carrito se redirecciona al  */
if (!isset($_SESSION['carrito'])) {
  header('Location: ./index2.php');
}
$arreglo = $_SESSION['carrito'];
?>
<?php include("../layouts/header.php"); ?>
<form method="post" id="frmPago">
  <div class="site-wrap">
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Detalles de facturación</h2>
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="estado" class="text-black">Estado<span class="text-danger">*</span></label>
                <select id="estado" class="form-control" name="estado">
                  <option value="0">Seleccionar estado</option>
                  <option value="Aguascalientes">Aguascalientes</option>
                  <option value="Baja California">Baja California</option>
                  <option value="Baja California Sur">Baja California Sur</option>
                  <option value="Campeche">	Campeche</option>
                  <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>
                  <option value="Colima">Colima</option>
                  <option value="Chiapas">Chiapas</option>
                  <option value="Chihuahua">	Chihuahua</option>
                  <option value="Distrito Federal">Distrito Federal</option>
                  <option value="Durango">	Durango</option>
                  <option value="Guanajuato">	Guanajuato</option>
                  <option value="Guerrero">Guerrero</option>
                  <option value="Hidalgo">Hidalgo</option>
                  <option value="Jalisco">	Jalisco</option>
                  <option value="México">	México</option>
                  <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                  <option value="Morelos">	Morelos</option>
                  <option value="Nayarit">	Nayarit</option>
                  <option value="Nuevo León">Nuevo León</option>
                  <option value="Oaxaca">	Oaxaca</option>
                  <option value="Puebla">Puebla</option>
                  <option value="Querétaro">Querétaro</option>
                  <option value="Quintana Roo">	Quintana Roo</option>
                  <option value="San Luis Potosí">	San Luis Potosí</option>
                  <option value="Sinaloa">Sinaloa</option>
                  <option value="Sonora">	Sonora</option>
                  <option value="Tabasco">	Tabasco</option>
                  <option value="Tamaulipas">Tamaulipas</option>
                </select>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <label for="direccion" class="text-black">Direccion <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Calle #, Colonia, Municipio">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <label for="cp" class="text-black">CP <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="cp" name="cp" >
                </div>
                <div class="col-md-6">
                  <label for="telefono" class="text-black">Telefono<span class="text-danger">*</span></label>
                  <input type="number" class="form-control" id="telefono" name="telefono">
                </div>
              </div>
              <div class="form-group">
                <label for="referencia" class="text-black">Referencia</label>
                <textarea name="referencia" id="referencia" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
              </div>
            </div>
          </div>
          <div class="col-md-6">

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Tu orden</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <?php
                      $total = 0;
                      for ($i = 0; $i < count($arreglo); $i++) {
                        $total = $total + ($arreglo[$i]['Precio'] * $arreglo[$i]['Cantidad']);
                      ?>
                        <tr>
                          <td><?php echo $arreglo[$i]['Nombre']; ?></td>
                          <td>$<?php echo number_format($arreglo[$i]['Precio'], 2, '.', ''); ?></td>
                        <?php } ?>
                        </tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>$<?php echo number_format($total, 2, '.', ''); ?></strong></td>
                        </tr>
                    </tbody>
                  </table>

                  


                  <!-- <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" id="btn_pagar">Place Order</button>
                  </div> -->
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" type="submit" id="btn_pagar">Realizar Pago</button>
                  </div>

                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- </form> -->
      </div>
    </div>
</form>
<?php include("../layouts/footer.php"); ?>
</div>
<script src="../manager/validar_btnPagar.js"></script>