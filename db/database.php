<?php

$serverName = "DESKTOP-56G697P\SQLEXPRESS";
$conectionInfor=array("Database" =>"dbComilon","UID"=>"sa","PWD"=>"Seba.1234","CharacterSet"=>"UTF-8");

$con = sqlsrv_connect($serverName,$conectionInfor);

// if ($con) 
// {
//    echo "funciona";
// }
// else 
// {
//    echo "No funciona";
// }

// $server_info = sqlsrv_server_info($con);
// if( $server_info )
// {
//     foreach( $server_info as $key => $value) {
//        echo $key.": ".$value."<br />";
//     }
// } else {
//       die( print_r( sqlsrv_errors(), true));
// }


// if( $con === false ) {
//     die( print_r( sqlsrv_errors(), true));
// }

// if($client_info = sqlsrv_client_info( $con)) {
//     foreach( $client_info as $key => $value) {
//         echo $key.": ".$value."<br />";
//     }
// } else {
//     echo "Error al recuperar la información del cliente.<br />";
// }



// if( $con === false ) {
//     die( print_r( sqlsrv_errors(),true));
// }

// $sql = "SELECT  * from usuarios;";
// $stmt = sqlsrv_query( $con, $sql );
// if( $stmt === false) 
// {
//     die( print_r( sqlsrv_errors(), true) );
// }

// while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
//       echo $row['rutUsuario'].", ".$row['nombre']."<br />";
// }

?>