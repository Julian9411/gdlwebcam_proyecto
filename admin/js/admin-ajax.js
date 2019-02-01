$(document).ready(function(){

    //Creacion de administradores

    $('#crear-admin').on('submit', function (e) {
        e.preventDefault();

        //variable que almacena los datos a enviar
        let datos = $(this).serializeArray();

        //llamado a AJAX con jQUERY

        $.ajax({
            //como se va a enviar la informacion
            type: $(this).attr('method'),
            //datos a enviar
            data: datos,
            //adonde se va a enviar la informacion
            url: $(this).attr('action'),
            //formato de envio
            dataType: 'json',
            //enviar la peticion
            success: function(data){
                let resultado = data;
                if(resultado.Respuesta === 'exito'){
                    Swal.fire(
                        'Usuario Creado',
                        'El usuario se acreado correctamente!',
                        'success'
                      )
                }else{
                    Swal.fire(
                        'Oops...',
                        'El E-mail ya se encuentra registrado',
                        'error'
                      )
                }
            }

        });

    });

    //logear a administradores

    $('#login-admin').on('submit', function (e) {
        e.preventDefault();

        //variable que almacena los datos a enviar
        let datos = $(this).serializeArray();

        //llamado a AJAX con jQUERY

        $.ajax({
            //como se va a enviar la informacion
            type: $(this).attr('method'),
            //datos a enviar
            data: datos,
            //adonde se va a enviar la informacion
            url: $(this).attr('action'),
            //formato de envio
            dataType: 'json',
            //enviar la peticion
            success: function(data){
                let resultado = data;
                if(resultado.respuesta === 'exitoso'){
                    Swal.fire(
                        'Login Correcto',
                        'Bienvenid@ '+ resultado.usuario + ' !',
                        'success'
                      )
                      .then(result => {
                          if(result.value){
                              window.location.href = 'admin-area.php';
                          }
                      })
                }else{
                    Swal.fire(
                        'Oops...',
                        'Email o Password incorrectos',
                        'error'
                      )
                }
            }

        });

    });
});