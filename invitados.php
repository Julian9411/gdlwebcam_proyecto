<?php include_once 'includes/templates/header.php'; ?>

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
          <div class="invitado"><img src="img/img/<?php echo $invitados['url_imagen']; ?>" alt="invitado1">
          <p><?php echo $invitados['nombre_invitado']. " " . $invitados['apellido_invitado']; ?></p>
          </div>
        </li>
        <pre>
                <?php var_dump($invitados) ?>
        </pre>
            <?php  } //cierre while invitados?>
          
            </ul>  
        </div>
       
    <?php $conn->close() //cierre de conecxion base de datos ?>
    </section>

<?php include_once 'includes/templates/footer.php' ?>
