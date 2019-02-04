<?php
  include_once 'funciones/sesiones.php';
  include_once 'funciones/funciones.php';
  $id = $_GET['id'];
  if(!filter_var($id, FILTER_VALIDATE_INT)){
    header('location: error404.php');
  }
  include_once 'templates/header.php';
  include_once 'templates/barra.php';
  include_once 'templates/navegacion.php';
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Editar Perfil 
        <small>puedes editar la información del perfil del administrador aqui</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
        <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Editar perfil</h3>

        </div>
        <div class="box-body">
          <?php
            $sql = ("SELECT * FROM `admin` WHERE `id_admin` = $id ");
            $resultado = $conn->query($sql);
            $admin = $resultado->fetch_assoc();
          ?>
          <!-- form start -->
          <form role="form" id="guardar_registro" name="guardar_registro" method="post" action="modelo-admin.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control " id="email" name="email" placeholder="El email es" value="<?php echo $admin['email']?>" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="El Nombre es" value="<?php echo $admin['nombre']?>">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Editar la contraseña">
                </div>
                <div class="form-group">
                  <label for="repetir_password">Confirmar la contraseña</label>
                  <input type="password" class="form-control" id="repetir_password" name="repetir_password" placeholder="Editar la contraseña">
                  <span id="resultado_password" class="help-block"></span>
                </div>
                <div class="form-group">
                  <label for="profecion">Profeción</label>
                  <input type="text" class="form-control" id="profecion" name="profecion" placeholder="La profecion es" value="<?php echo $admin['profecion']?>">
                </div>
                <?php
                    if($_SESSION['nivel'] === 2):
                ?>
                <div class="form-group">
                  <label for="nivel">Seleccione el nivel de acceso</label>
                  <select class="form-control select2" id="nivel" name="nivel">
                    <option value="-1">-- Seleccione el Nivel de Acceso --</option>
                    <option value="0">0 - visitante</option>
                    <option value="1">1 - Admin contenidos</option>
                    <option value="2">2 - Administrador del sitio</option>
                  </select>
                </div>
                <?php 
                    endif;
                ?>
                <div class="form-group">
                  <label for="imgperfil">Elije una imagen de perfil</label>
                  <input type="file" id="imgperfil">
                </div>
                <div class="form-group">
                  <label for="img">Nombre de la imagen</label>
                  <input type="text" class="form-control" id="img" name="img" placeholder="imagen.jpg" value="<?php echo $admin['url_img']?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="editar">
                <input type="hidden" name="id_registro" value="<?php echo $id ?>">
                <button type="submit" class="btn btn-primary">Actualizar</button>
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
