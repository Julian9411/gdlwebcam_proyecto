<?php

require_once '../includes/funciones/bd_conexion.php';


/*/mostrar Administradores
function mostrarAdmin(){
    include '../includes/funciones/bd_conexion.php';

    try {
        return $conn->query("SELECT email, url_img, estado_conexion FROM admin");
    } catch (Exception $e) {
        echo 'Error!! ' . $e->getMessage(); 
    }
}

