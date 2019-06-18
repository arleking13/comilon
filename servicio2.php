<?php
include('lib/nusoap.php');
$server = new soap_server();
$server->configureWSDL('Servidor', 'urn:Servidor');


$server->register("getProd",
array("categoria" => "xsd:string"),
array("return" => "xsd:string"),
"urn:producto",
"urn:producto#getProd",
"rpc",
"encoded",
"Nos da una lista de productos de cada categoría");


function getProd($categoria) {
    if ($categoria == "menus") {
        return join(",", array(
            "Completo Italiano Con bebida",
            "Churrasco Italiano Con bebida",
            "Chacarero Con Bebida",
            "Completo A lo Pobre",
            "Completo a la Chilena",
            "Chorrillana",
            "Empanadas de Queso",
            "Arrollados de primavera",
            "Wantan",
            "Palitos de Queso"));
    }
    else if ($categoria == "precios") {
        return join(",", array(
            "3500",
            "4000",
            "3990",
            "4990",
            "3990",
            "6500",
            "1990",
            "3000",
            "2000",
            "2000",
            "2000"));
    }
    else if ($categoria == "stock") {
        return join(",", array(
            "30",
            "45",
            "20",
            "40",
            "25",
            "15",
            "40",
            "33",
            "15",
            "10",
            "5"));
    }
    else {
        return "No hay productos de esta categoria";
    }
}

   
    $HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
    @$server->service(file_get_contents("php://input"));
    //$server->service($HTTP_RAW_POST_DATA);

?>