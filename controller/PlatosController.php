<?php
include('../model/PlatosModel.php');


class PlatosController
{

public function listarPlatos()
{
    $Platos = listarPlatos();
    return $Platos;
}



}



?>