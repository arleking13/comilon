<?php

function Login($usuario,$pass)
{
    include_once('../db/database.php');
    $query = "exec splogin '$usuario' ,'$pass'";
    $consulta= sqlsrv_query($con,$query);
    //$filas = sqlsrv_has_rows($consulta);
    $resultado = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC);
    return $resultado;
}



?>