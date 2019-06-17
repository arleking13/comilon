<?php

function Login($usuario,$pass)
{
    include_once('../db/database.php');
    $query = "exec splogin '$usuario','$pass'";
    $consulta= sqlsrv_query($con,$query);
    $resultado = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC);
    return $resultado;
}



?>