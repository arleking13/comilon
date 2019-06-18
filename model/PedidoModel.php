<?php

function precioPlato($id)
{
    include_once('../db/database.php');
    $query = "select precio from platos where idPlatos= . '$id'";
    $consulta= sqlsrv_query($con,$query);
    $resultado = sqlsrv_fetch_array( $consulta, SQLSRV_FETCH_ASSOC);
    return $resultado;
}



?>