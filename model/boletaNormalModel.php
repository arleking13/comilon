<?php

function insertarCompra($nombre,$rut,$direccion,$tipoRetiro,$total,$fechaEntrega)
{
    include('../db/database.php');
    $query = "spinsertar_boletaNormal '$nombre','$rut','$direccion','$tipoRetiro','$total','$fechaEntrega'";
    $consulta= sqlsrv_query($con,$query);
    return $consulta;
}

// function precioPlato($id)
// {
//     include_once('../db/database.php');
//     $query = "select precio from platos where idPlatos=$id";
//     $consulta= sqlsrv_query($con,$query);
//     $resultado = sqlsrv_fetch_array($consulta,SQLSRV_FETCH_NUMERIC);
//     return $resultado;
// }

?>