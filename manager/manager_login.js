$(document).ready(function() {
    $('#btn_ingresar').click(function(){
      /*  console.log('hola');
       return false; */
        recolector = "usuario=" +$('#nombre_usuario').val()+
        "&password=" + $('#password').val();
       /*  console.log($('#nombre_usuario').val()); */
        $.ajax({
            type: "POST",
            /* serialize: crea una cadena de texto con los valores del formulario */
            data: recolector,
            url: 'control/usuario/login/login.php',
            success: function(respuesta) {
               respuesta = respuesta.trim();
               console.log(respuesta);
               
               if (respuesta == 1) {
                  swal("n_n", "Ingreso correctamente", "success");
                  /* redirigir el navegador a una nueva página, en este caso nos dirigimos a inicio */
                  window.location = "view/index2.php";
                
               } else {
                  swal("Error x_x!!!", "Regitrate o vuelve a intentarlo", "error");
               }
            }
         });
         return false;
    });
});