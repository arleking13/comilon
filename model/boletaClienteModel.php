<?php

function insertarCompra($rut,$estado,$direccion,$tipoRetiro,$total,$fechaEntrega)
{
    include('../db/database.php');
    $query = "spinsertar_boletaCliente '$rut','$estado','$direccion','$tipoRetiro','$total','$fechaEntrega'";
    //die($query);
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