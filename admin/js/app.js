$(document).ready(function () {
    
    //aside
    $('.sidebar-menu').tree()


    //data-tables
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })

    //verificacion de password de administrador

    $('#crear_registro').attr('disabled', true);

    $('#repetir_password').on('blur', function(){
      let pass = $('#password').val();
      if($('#repetir_password').val() === pass){
        $('#resultado_password').text('correcto');
        $('#resultado_password').parents('.form-group').addClass('has-success').removeClass('has-error');
        $('#password').parents('.form-group').addClass('has-success').removeClass('has-error');
        $('#crear_registro').attr('disabled', false);

      }else{
        $('#resultado_password').text('Las contraseñas no son iguales');
        $('#resultado_password').parents('.form-group').addClass('has-error').removeClass('has-success');
        $('#password').parents('.form-group').addClass('has-error').removeClass('has-success');
      }
    })

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })

    //Initialize Select2 Elements
    $('.select2').select2()


    
  })
