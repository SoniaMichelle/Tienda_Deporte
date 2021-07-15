$(document).ready(function () {
  $('#btn_registrar').click(function () {
    if ($('#nombres').val() == "") {
      swal("Alerta!!!", "Debes de ingresar el nombre", "warning");
      return false;
    } else if ($('#apellido_paterno').val() == "") {
      swal("Alerta!!!", "Debes de ingresar el paterno", "warning");
      return false;
    } else if ($('#apellido_materno').val() == "") {
      swal("Alerta!!!", "Debes de ingresar el materno", "warning");
      return false;
    } else if ($('#nombre_usuario').val() == "") {
      swal("Alerta!!!", "Debes de ingresar el usuario", "warning");
      return false;
    } else if ($('#email').val() == "") {
      swal("Alerta!!!", "Debes de ingresar el email", "warning");
      return false;
    } else if ($('#password').val() == "") {
      swal("Alerta!!!", "Debes de ingresar la contraseña", "warning");
      return false;
    } else {
      recolector = "nombre=" + $('#nombres').val() +
        "&paterno=" + $('#apellido_paterno').val() +
        "&materno=" + $('#apellido_materno').val() +
        "&usuario=" + $('#nombre_usuario').val() +
        "&email=" + $('#email').val() +
        "&password=" + $('#password').val();
      /* 
              console.log($('#sexo').val()); */

      $.ajax({
        type: 'POST',
        data: recolector,
        url: "control/usuario/registro/agregarUsuario.php",
        success: function (respuesta) {
          respuesta = respuesta.trim();
          if (respuesta == 1) {
            swal("Exito!!!", "Se agrego nuevo usuario", "success");
            window.location = "inicio-sesion";
            /* Cuando aparece el 2 el usuario ya existe */
          } else if (respuesta == 2) {
            swal("Alerta!!!", "Este usuario ya exite, agrega otro", "warning");
          } else {
            swal("Error!!!", "No se pudo agregar nuevo usuario", "error");
          }
        }
      });
      return false;
    } 
  });
  
});