<?php
include('../model/LoginModel.php');

//LOGIN

if ($_POST['sbtLogin']) 
{
    $usuario = $_POST['txtUsuario'];
    $password= $_POST['txtPass'];
    $prueba=Login($usuario,$password);
    if($prueba !=null) 
    {
        session_start(); 
        //die(print_r($prueba));
        $_SESSION['rut'] = $prueba['rutUsuario'];
        $_SESSION['nombre'] = $prueba['nombre'];
        $_SESSION['apellido'] = $prueba['apellidos'];
        $_SESSION['perfil'] = $prueba['idPerfil'];
        $_SESSION['direccion'] = $prueba['direccion'];
        header("Location:http://".$_SERVER['HTTP_HOST'].'/comilon');
    }
    else
     {
        header("Location:http://".$_SERVER['HTTP_HOST'].'/comilon/login.php'); 
     }
}
else
{
    session_start();
    session_destroy();
    header("Location:http://".$_SERVER['HTTP_HOST'].'/comilon/login.php');
}



//CERRAR SESION
if (isset($_GET['cerrarSesion']))
{
    session_start();
    session_destroy();
    header("Location:http://".$_SERVER['HTTP_HOST'].'/comilon/login.php');
}

?>