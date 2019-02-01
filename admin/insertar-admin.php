<?php
include_once 'funciones/funciones.php';

//Creacion de administradores
if(isset($_POST['agregar-admin'])){

    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    $profecion = $_POST['profecion'];
    $urlImg = $_POST['img'];
    $opciones = array(
        'cost' => 12
    );

    $password_hash = password_hash($password, PASSWORD_BCRYPT, $opciones);

    try {
        include_once 'funciones/funciones.php';
        $stmt = $conn->prepare("INSERT INTO admin (email, nombre, password, profecion, url_img) VALUES (?,?,?,?,?)");
        $stmt->bind_param('sssss', $email, $nombre, $password_hash, $profecion, $urlImg);
        $stmt->execute();
        $idAdmin = $stmt->insert_id;
        if($stmt->affected_rows > 0){
            $respuesta = array (
                'Respuesta' => 'exito',
                'id_admin' => $idAdmin
            );
        }else{
            $respuesta = array (
                'Respuesta' => 'Error!!'           
            );
        }
        $stmt->close();
        $conn->close();
    } catch (Exception $e) {
        echo 'Error: '. $e->getMessage();
    }
}

//logear administradores
if(isset($_POST['login-admin'])){

    $email = $_POST['email'];
    $password = $_POST['password'];


    try {
        include_once 'funciones/funciones.php';
        $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $stmt->bind_result($id_admin, $email_admin, $nombre_admin, $pass_admin, $profecion_admin, $url_img_admin);
        if($stmt->affected_rows){
            $existe = $stmt->fetch();
            if($existe){
                if(password_verify($password, $pass_admin)){
                    session_start();
                    $_SESSION['email'] = $email_admin;
                    $_SESSION['nombre'] = $nombre_admin;
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

?>