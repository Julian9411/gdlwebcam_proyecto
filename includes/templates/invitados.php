<section class="seccion contenedor">
        <h2>Nuestros Invitados</h2>

        <?php 
            try {
                require_once('includes/funciones/bd_conexion.php');
                $sql = " SELECT * FROM `invitados` ";
                $resultado = $conn->query($sql);
            } catch (Exception $e){
                $error = $e->getMessage();
            }
        ?>
        <div class="invitados">

      <ul class="lista_invitados clearfix">
            <?php 
                while($invitados = $resultado->fetch_assoc()){
            ?>

        <li>
            <a class="invitado-info" href="#invitado<?php echo $invitados['invitado_id'] ?>">
                <div class="invitado"><img src="img/img/<?php echo $invitados['url_imagen']; ?>" alt="invitado1">
                <p><?php echo $invitados['nombre_invitado']. " " . $invitados['apellido_invitado']; ?></p>
                </div>
          </a>
        </li>

        <div style="display:none;">
            <div class="invitado-info" id="invitado<?php echo $invitados['invitado_id'] ?>">
                    <h2><?php echo $invitados['nombre_invitado'] . " " . $invitados['apellido_invitado']; ?></h2>
                    <img src="img/img/<?php echo $invitados['url_imagen']; ?>" alt="">
                    <p><?php echo $invitados['descripcion_invitado']; ?></p>
            </div>
        </div>
            <?php  } //cierre while invitados?>
          
            </ul>  
        </div>
       
    <?php $conn->close() //cierre de conecxion base de datos ?>
    </section>
