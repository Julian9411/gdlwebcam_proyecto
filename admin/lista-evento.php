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
          Listado de Eventos
          <small>Aqui podras Editar o Borrar cualquier evento</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Maneja los eventos en esta sección</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre del Evento</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Categoria</th>
                  <th>Invitado</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    try {
                      $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado FROM eventos INNER JOIN categoriaEvento ON eventos.id_cat_evento = categoriaEvento.id_categoria INNER JOIN invitados ON eventos.id_inv = invitados.invitado_id ORDER BY evento_id";
                      $resultado = $conn->query($sql);
                    } catch (Exception $e) {
                      echo 'error! '. $e->getMessage();
                    }
                    
                    while($evento = $resultado->fetch_assoc()):
                  ?>
                    <tr>
                        <td>
                        <?php echo $evento['nombre_evento'] ?>
                        </td>
                        <td>
                        <?php echo $evento['fecha_evento'] ?>
                        </td>
                        <td>
                        <?php echo $evento['hora_evento'] ?>
                        </td>
                        <td>
                        <?php echo $evento['cat_evento'] ?>
                        </td>
                        <td>
                        <?php echo $evento['nombre_invitado'] . " " . $evento['apellido_invitado'] ?>
                        </td>
                        <?php
                            if($_SESSION['nivel'] === 0):
                        ?>
                            <td>
                            <a href="editar-evento.php?id=<?php echo $evento['evento_id']?>" class="btn bg-orange btn-flat margin" disabled>
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-id="<?php echo $evento['evento_id']?>" data-tipo="admin" class="btn bg-maroon btn-flat margin borrar-registro" disabled>
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                            </td>
                        <?php
                            else:
                        ?>
                            <td>
                            <a href="editar-evento.php?id=<?php echo $evento['evento_id']?>" class="btn bg-orange btn-flat margin" >
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                            </a>
                            <a href="#" data-id="<?php echo $evento['evento_id']?>" data-tipo="evento" class="btn bg-maroon btn-flat margin borrar-registro" >
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                            </td>
                    <?php 
                            endif;
                        endwhile;
                    ?>
                  </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nombre del Evento</th>
                  <th>Fecha</th>
                  <th>Hora</th>
                  <th>Categoria</th>
                  <th>Invitado</th>
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
