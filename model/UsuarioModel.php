<?php

function Registrar($rut,$nombre,$apellido,$direccion,$telefono,$mail,$usuario,$pass)
{
    include_once('../db/database.php');
    $query = "spinsertar_usuarioWeb '$rut','$nombre','$apellido','$direccion','$telefono','$mail','$usuario','$pass'";
    $consulta= sqlsrv_query($con,$query);
    return $consulta;
}

?>