$(document).ready(function(){

    //Creacion de administradores

    $('#guardar_registro').on('submit', function (e) {
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
                console.log(data);
                let resultado = data;
                if(resultado.Respuesta === 'exito'){
                    Swal.fire(
                        'Usuario Creado',
                        'El usuario se acreado correctamente!',
                        'success'
                      )
                }else if(resultado.respuesta === 'actualizado'){
                    Swal.fire(
                        'Usuario Acuatlizado',
                        'Se actualizo la información correctamente!',
                        'success'
                      ).then(result => {
                        if(result.value){
                            window.location.href = 'lista-admin.php';
                        }
                    })
                }else{
                    Swal.fire(
                        'Oops...',
                        'Algo salio mal',
                        'error'
                      )
                }
            }

        });

    });

    //Borrar un reguistro 
    $('.borrar-registro').on('click', function(e){
        e.preventDefault();

        let id =$(this).attr('data-id'),
            tipo = $(this).attr('data-tipo');
        Swal.fire({
        title: '¿Estas Segur@?',
        text: "El registro eliminado no se puede recuperar!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'Cancelar'
        }).then(function (){
            $.ajax({
                type: 'post',
                data: {
                    'id': id,
                    'registro': 'eliminar'
                },
                url: 'modelo-'+tipo+'.php',
                dataType: 'json',
                success: function(data){
                    if(data.respuesta === 'eliminado'){
                            
                        Swal.fire(
                        'Borrado!',
                        'El Usuario a sido borrado.',
                        'success'
                        )
                        
                        jQuery('[data-id="'+data.idEliminado+'"]').parents('tr').remove();
                    }else{
                        Swal.fire(
                            'Oops...',
                            'Algo salio mal',
                            'error'
                          )
                    }
                }
            })
            
        })
        
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