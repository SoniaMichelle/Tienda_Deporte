$(document).ready(function(){
    $('#btn_eliminar').click(function(event){
        event.preventDefault();
        var id= $(this).data('id');
        var boton = $(this);
        $.ajax({
            method: 'POST',
            url:'../control/eliminarCarrito.php',
            data:{
                id:id
            },
            success: function(respuesta){
                if (respuesta == 0 ) {
                    boton.parent('td').parent('tr').remove();
                swal("Listo!!!", "Se elimino con exito", "success");

            location.reload();
                }
            }
        });
        return false;
    });
    $('#txtCantidad').keyup(function(){
        var cantidad = $(this).val();
        var precio = $(this).data('precio');
        var id = $(this).data('id');
        incrementar(cantidad, precio, id);
    });
    $('.btnIncrementar').click(function(){
        var precio = $(this).parent('div').parent('div').find('input').data('precio');
        var id = $(this).parent('div').parent('div').find('input').data('id');
        var cantidad = $(this).parent('div').parent('div').find('input').val();
        incrementar(cantidad, precio, id);
    });
    function incrementar(cantidad,precio,id){
        var multi = parseFloat(cantidad) * parseFloat(precio);
        $(".cant" + id).text(multi);
        $.ajax({
            method: 'POST',
            url:'../control/actualizar.php',
            data:{
                id:id,
                cantidad:cantidad
            },
            success: function(respuesta){
                /* boton.parent('td').parent('tr').remove(); */
            }
        });
    }
});