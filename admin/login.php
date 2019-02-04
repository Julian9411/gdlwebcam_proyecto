<?php
  session_start();
  $cerrarSecion = $_GET['cerrar_sesion'];
  if($cerrarSecion){
    session_destroy();
  }
  include_once 'funciones/funciones.php';
  include_once 'templates/header.php';
?>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../index.php"><b>GDL</b>WebCamp</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicia sesión aqui</p>
    <form id="login-admin" name="login-admin-form" method="post" action="modelo-admin.php">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email" required>
        <span class="fa fa-share form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password" required>
        <span class="fa fa-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <input type="hidden" name="login-admin" value='1'>
          <input type="hidden" name="estado_conexion" value="1"> 
          <button  type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
  
</div>
<!-- ./wrapper -->
<?php
  include_once 'templates/footer.php';
?>
