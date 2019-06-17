<?php 
include('../model/UsuarioModel.php');

if ($_POST['sbtRegistrar']) 
{
    $rut = $_POST['txtRut'];
    $nombre= $_POST['txtNombre'];
    $apellido= $_POST['txtApellido'];
    $direccion= $_POST['txtDireccion'];
    $telefono= $_POST['txtTelefono'];
    $mail= $_POST['txtMail'];
    $usuario= $_POST['txtUsuario'];
    $pass= $_POST['txtPass'];
    $resultado = Registrar($rut,$nombre,$apellido,$direccion,$telefono,$mail,$usuario,$pass);
    if($resultado) 
    {
        echo "Usuario Agregado Correctamente" . '<br/>';
        echo "<a href='http://localhost/comilon/'>Volver Al Inicio</a>";
        //header("Location:http://".$_SERVER['HTTP_HOST'].'/comilon');
    }
    else
     {
        echo "No se pudo agregar el usuario" . '<br/>';
        echo "<a href='http://localhost/comilon/'>Volver Al Inicio</a>";
        //header("Location:http://".$_SERVER['HTTP_HOST'].'/comilon/'); 
     }
}


?>