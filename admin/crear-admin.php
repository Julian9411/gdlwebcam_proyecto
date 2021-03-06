<?php
  include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php';
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Crear Administrador
        <small>Llena el formulario para crear un Administrador</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
        <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Administrador</h3>

        </div>
        <div class="box-body">
          <!-- form start -->
          <form role="form" id="guardar_registro" name="guardar_registro" method="post" action="modelo-admin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="El email es" required>
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="El Nombre es">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Su contraseña es" required>
                </div>
                <div class="form-group">
                  <label for="repetir_password">Confirmar la contraseña</label>
                  <input type="password" class="form-control" id="repetir_password" name="repetir_password" placeholder="Su contraseña es" required>
                  <span id="resultado_password" class="help-block"></span>
                </div>
                <div class="form-group">
                  <label for="profecion">Profeción</label>
                  <input type="text" class="form-control" id="profecion" name="profecion" placeholder="La profecion es">
                </div>
                <div class="form-group">
                  <label for="nivel">Seleccione el nivel de acceso</label>
                  <select class="form-control select2" id="nivel" name="nivel">
                    <option>-- Seleccione el Nival de Acceso --</option>
                    <option value="0">0 - visitante</option>
                    <option value="1">1 - Admin contenidos</option>
                    <option value="2">2 - Administrador del sitio</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="imgperfil">Elije una imagen de perfil</label>
                  <input type="file" id="imgperfil">
                </div>
                <div class="form-group">
                  <label for="img">Nombre de la imagen</label>
                  <input type="text" class="form-control" id="img" name="img" placeholder="imagen.jpg">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="nuevo">
                <button type="submit" class="btn btn-primary" id="crear_registro">Añadir</button>
              </div>
            </form>        
          
          </div>
        <!-- /.box-body -->
        </div>
      <!-- /.box -->

    </section>
      </div>
    </div>
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  
</div>
<!-- ./wrapper -->
<?php
  include_once 'templates/footer.php';
?>
