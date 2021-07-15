$(document).ready(function () {
    $('#btn_pagar').click(function () {
        if ($('#estado').val()==0) {
            swal("Alerta!!!", "Debes de seleccionar un estado", "warning");
            return false;
        }else if ($('#direccion').val() == "") {
            swal("Alerta!!!", "Debes de ingrsar la direccion", "warning");
            return false;
        } else if ($('#cp').val() == "") {
            swal("Alerta!!!", "Debes de ingrsar tu CP", "warning");
            return false;
        }else if ($('#telefono').val() == "") {
            swal("Alerta!!!", "Debes de ingrsar tu numero telefonico", "warning");
            return false;
        }else {
            $.ajax({
                type: "POST",
                data: $('#frmPago').serialize(),
                url: "../control/pago.php",
                success: function (respuesta) {
                    respuesta = respuesta.trim();
                    if (respuesta == 1) {
                        swal("Exito!!!", "Se agrego nuevo usuario", "success");
                        window.location = "../view/thankyou.php";
                    } else {
                        swal("upss!!!", "No se pudo actualizar", "error");
                    }
                }
            })
            return false;
        } 

    });
});