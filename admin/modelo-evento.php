<?php
include_once 'funciones/funciones.php';

//variables generales
$nombreEvento = $_POST['nombreEvento'];
$fechaEvento = $_POST['fechaEvento'];
$formatoFechaEvento = date('Y-m-d', strtotime($fechaEvento));
$horaEvento =  $_POST['horaEvento'];
$idCategoria = $_POST['categoria'];
$idInvitado = $_POST['invitado'];
    
    //Creacion de eventos
if($_POST['registro'] == 'nuevo'){
    try {
        $stmt = $conn->prepare("INSERT INTO eventos ( nombre_evento, fecha_evento, hora_evento, id_cat_evento, id_inv ) VALUES (?,?,?,?,?) " );
        $stmt->bind_param('sssii', $nombreEvento, $formatoFechaEvento, $horaEvento, $idCategoria, $idInvitado);
        $stmt->execute();
        $idCreado = $stmt->insert_id;
        if($stmt->affected_rows){
            $respuesta = array(
                
                'Respuesta' => 'exito',
                'idInsertado' => $idCreado
            );
        }else {
            $respuesta = array(
                'respuesta' => 'Error!!'
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exceprion $e) {
        $respuesta = array(
            'Respuesta' => $e.getMessage()
        );
    }
    
    die(json_encode($respuesta));

}

//logear administradores
if(isset($_POST['login-admin'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $estadoConexion['estado_conexion'];

    try {
        include_once 'funciones/funciones.php';
        $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->bind_result($id_admin, $email_admin, $nombre_admin, $pass_admin, $profecion_admin, $url_img_admin, $editado, $nivel ,$estadoConexion);
        if($stmt->affected_rows){
            $existe = $stmt->fetch();
            if($existe){
                if(password_verify($password, $pass_admin)){
                    session_start();
                    $_SESSION['email'] = $email_admin;
                    $_SESSION['nombre'] = $nombre_admin;
                    $_SESSION['cargo'] = $profecion_admin;
                    $_SESSION['urlImg'] = $url_img_admin;
                    $_SESSION['nivel'] = $nivel;
                    $_SESSION['estadoConexion'] = $estadoConexion;
                    $_SESSION['id'] = $id_admin;
                    
                    $respuesta = array (
                        'respuesta' => 'exitoso',
                        'usuario' => $nombre_admin
                    );
                }else{
                    $respuesta = array (
                        'respuesta' => 'contraseña_invalida'
                    );
                }
            }else{
                $respuesta = array(
                    'respuesta' => 'no_existe'
                );
            }
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo 'Error: '. $e->getMessage();
    }

    die(json_encode($respuesta));
}

//Actualizacion de administradores
if($_POST['registro'] == 'editar'){

   
    
    try {
        if(empty($_POST['password'])):
            $stmt = $conn->prepare("UPDATE admin SET nombre = ?, profecion = ?, url_img = ?, editado = NOW(), nivel = ?  WHERE id_admin = ?");
            $stmt->bind_param('sssii', $nombre, $profecion, $urlImg, $nivelAdmin,$id_admin);
        else:
            $opciones = array(
                'cost' => 12
            );
            
            $password_hash = password_hash($password, PASSWORD_BCRYPT, $opciones);
            $stmt = $conn->prepare("UPDATE admin SET nombre = ?, password = ? ,profecion = ?, url_img = ?, editado = NOW(), nivel = ? WHERE id_admin = ?");
            $stmt->bind_param('ssssii', $nombre, $password_hash , $profecion, $urlImg, $nivelAdmin, $id_admin);
           
         endif;
        $stmt->execute();
            if($stmt->affected_rows){
                $respuesta = array(
                    'respuesta' => 'actualizado',
                    'id_actualizado' => $stmt->inser_id
            );
            }else{
                $respuesta = array(
                    'respuesta' => 'Error'
                );
            }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo 'Error! '. $e->getMessage();
    }
    die(json_encode($respuesta));
}
//Eliminacion de administradores
if($_POST['registro'] == 'eliminar'){

    $idEliminado = (INT) $_POST['id'];

    try {
        $stmt = $conn->prepare("DELETE FROM admin WHERE id_admin = ?");
        $stmt->bind_param('i', $idEliminado);
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta' => 'eliminado',
                'idEliminado' => $idEliminado
            );
        }else{
            $respuesta = array (
                'respuesta' => 'Error'
            );
        }
    } catch (Exception $e) {
        echo 'Error !' . $e->getMessage();
    }




    die(json_encode($respuesta));
}
?>