jQuery(document).on('submit', '#login', function (event) {
    event.preventDefault();

    jQuery.ajax({
            url: 'login.php',
            type: 'POST',
            dataType: 'json',
            //el metodo serialize nos devuelve una cadena para envio a la base de datos
            data: $(this).serialize(),
            beforeSend: function () {

            }
        })
        //si la peticion es ejecutada con exito
        //ejecuta una funcion que espera como parametro la respuesta del servidor
        .done(function (respuesta) {
            console.log(respuesta);
            if (!respuesta.error) {
                if (respuesta.curso == 6) {  
                    location.href = 'inicio.php';
                } else if (respuesta.curso == 9) {
                    location.href = 'inicio.php';
                } else if (respuesta.curso == 2) {
                    location.href = 'inicio.php';
                } else {
                    toastr.warning('Curso no asignado', 'Error');
                }
            }else{
                toastr.error('Contraseña o Usuario incorrectos', 'Error',{
                    "preventDuplicates": true,
                    "progressBar": true
                });
            }
            
        })
        //si la peticion falla
        .fail(function (resp) {
            console.log(resp.responseText);
        })

        //si la peticion es completa
        .always(function () {
            console.log("complete");
        });
});