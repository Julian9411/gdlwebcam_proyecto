<?php
//autenticar usuario
function usuarioAutenticado(){
    if(!revisarUsuario()){
        header('location:login.php');
        exit();
    }
}

function revisarUsuario(){
    return isset($_SESSION['email']);
}
session_start();
usuarioAutenticado();