<?php include_once 'includes/templates/header.php'; ?>

    <section class="seccion contenedor">
        <h2>Calendario de eventos</h2>

        <?php 
            try{
                require_once('includes/funciones/bd_conexion.php');
                $sql = "SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado ";
                $sql .= "FROM eventos ";
                $sql .= "INNER JOIN categoriaEvento ";
                $sql .= "ON eventos.id_cat_evento = categoriaEvento.id_categoria ";
                $sql .= "INNER JOIN invitados ";
                $sql .= "ON eventos.id_inv = invitados.invitado_id ";
                $sql .= "ORDER BY evento_id";
                $resultado = $conn->query($sql);
            }catch (\Exception $e){
                echo $e->getMessage();
            }
        
        ?>

        <div class="calendario">

            <?php 

                $calendario = array();

               while( $eventos = $resultado->fetch_assoc()){

                    $evento = array(
                        'titulo' => $eventos['nombre_evento'],
                        'fecha' => $eventos['fecha_evento'],
                        'hora' => $eventos['hora_evento'],
                        'categoria' => $eventos['cat_evento'],
                        'icono' => $eventos['icono'],
                        'invitado' => $eventos['nombre_invitado'] . " " .$eventos['apellido_invitado']
                    );
                    
                    $fecha = $eventos['fecha_evento'];
                    $categoria = $eventos['cat_evento'];
                    
                    $calendario[$fecha][] = $evento;
               }?>
            <div class="clearfix">
            <?php   foreach( $calendario as $dia => $lista_eventos ){

                    echo '<h3>';
                        echo '<i class="far fa-calendar-alt"> ';
                            setlocale(LC_TIME, 'es_ES.UTF-8');
                            setlocale(LC_TIME, 'spanish');
                            echo strftime ("%a, %d de %B del %Y", strtotime($dia));
                        echo '</i>';
                    echo '</h3>'; ?>
                 <?php   foreach ($lista_eventos as $evento) { ?>
                    
                        <div class="dia">
                            
                            <p class="titulo"><?php echo $eventos['titulo']; ?></p>
                            <p class="hora">
                                <i class="far fa-clock"></i>
                                <?php echo $evento['fecha'] . " " . $evento['hora']; ?>
                            </p>
                            <p class="categoria">
                                <i class="fas <?php echo $evento['icono']; ?>"></i>
                                <?php echo $evento['categoria']; ?>
                            </p>
                            <p class="invitado">
                                <i class="fas fa-user"></i>
                                <?php echo $evento['invitado']; ?>
                            </p>
                        
                        </div>
                <?php  } //foreach lista eventos?>

                
            
            <?php } //foreach calendario ?> 
            </div>
                    <pre>
                    <?php var_dump($calendario);?>
                    </pre>
               

            <?php
                $conn->close();
            ?>

        </div>
        
    </section>

<?php include_once 'includes/templates/footer.php' ?>
