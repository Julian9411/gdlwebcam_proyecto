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
        Crear Evento
        <small>Llena el formulario para crear un Evento</small>
      </h1>
    </section>

    <div class="row">
      <div class="col-md-8">
        <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Crear Evento</h3>

        </div>
        <div class="box-body">
          <!-- form start -->
          <form role="form" id="guardar_registro" name="guardar_registro" method="post" action="modelo-evento.php">
              <div class="box-body">
                <div class="form-group">
                  <label for="nombreEvento">Nombre del Evento</label>
                  <input type="text" class="form-control" id="nombreEvento" name="nombreEvento" placeholder="El nombre del evento es" required>
                </div>
                <!-- Date -->
              <div class="form-group">
                <label for="fechaEvento">Fecha del Evento:</label>

                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="datepicker" name="fechaEvento">
                </div>
                <!-- /.input group -->
              </div>
              <div class="bootstrap-timepicker">
                <div class="form-group">
                  <label for="horaEvento">Hora del Evento</label>
                  <div class="input-group">
                    <input type="text" class="form-control timepicker" name="horaEvento">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <!-- /.form group -->
              <div class="form-group">
                <label for="categoria">Categoria del Evento</label>
                <?php
                    try {
                        $sql = ("SELECT * FROM categoriaEvento ");
                        $resultado = $conn->query($sql);
                    } catch (Exception $e) {
                        echo 'Error!!' . $e->getMessage();
                    }
                ?>
                <select class="form-control select2" style="width: 100%;" name="categoria" required> 
                  <option value="0" >-- Seleccione La Categoria --</option>
                    <?php
                        while ($categoria = $resultado->fetch_assoc()):
                            echo '<pre>';
                            var_dump($eventos);
                            echo '</pre>';
                    ?>
                  <option value="<?php echo $categoria['id_categoria'] ?>"><?php echo $categoria['cat_evento'] ?></option>
                    <?php
                        endwhile;
                    ?>
                </select>
              </div>
                <!-- /.form group -->
              <div class="form-group">
                <label for="invitado">Invitado o Ponente del Evento</label>
                <?php
                    try {
                        $sql = ("SELECT invitado_id, nombre_invitado, apellido_invitado FROM invitados ");
                        $resultado = $conn->query($sql);
                    } catch (Exception $e) {
                        echo 'Error!!' . $e->getMessage();
                    }
                ?>
                <select class="form-control select2" style="width: 100%;" name="invitado" required> 
                  <option value="0" >-- Seleccione el Invitado --</option>
                    <?php
                        while ($invitado = $resultado->fetch_assoc()):
                            echo '<pre>';
                            var_dump($eventos);
                            echo '</pre>';
                    ?>
                  <option value="<?php echo $invitado['invitado_id'] ?>"><?php echo $invitado['nombre_invitado'] . " " . $invitado['apellido_invitado'] ?></option>
                    <?php
                        endwhile;
                    ?>
                </select>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input type="hidden" name="registro" value="nuevo">
                <button type="submit" class="btn btn-primary">Añadir</button>
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
