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
          Listado de Administradores
          <small></small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los usuarios en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Email</th>
                  <th>Nombre(s)</th>
                  <th>Cargo</th>
                  <th>Foto de perfil</th>
                  <th>Nombre img</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    try {
                      $sql = "SELECT * FROM admin";
                      $resultado = $conn->query($sql);
                    } catch (Exception $e) {
                      echo 'error! '. $e->getMessage();
                    }
                    
                    while($admin = $resultado->fetch_assoc()):
                  ?>
                  <tr>
                    <td>
                      <?php echo $admin['email'] ?>
                    </td>
                    <td>
                      <?php echo $admin['nombre'] ?>
                    </td>
                    <td>
                      <?php echo $admin['profecion'] ?>
                    </td>
                    <td>
                      <img src="img/<?php echo $admin['url_img'] ?>">
                    </td>
                    <td>
                      <?php echo $admin['url_img'] ?>
                    </td>
                    <td>
                      <a href="editar-admin.php?id=<?php echo $admin['id_admin']?>" class="btn bg-orange btn-flat margin">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                      </a>
                      <a href="#" data-id="<?php echo $admin['id_admin']?>" data-tipo="admin" class="btn bg-maroon btn-flat margin borrar-registro">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                      </a>
                    </td>
                    <?php 
                      endwhile;
                    ?>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Email</th>
                  <th>Nombre(s)</th>
                  <th>Cargo</th>
                  <th>Foto de perfil</th>
                  <th>Nombre img</th>
                  <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
  </div>
  
</div>
<!-- ./wrapper -->
<?php
  include_once 'templates/footer.php';
?>
