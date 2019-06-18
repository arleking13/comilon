<?php 
include('../model/boletaNormalModel.php');
include('../db/database.php');

if ($_POST['sbtPedido']) 
{
    $nombre = $_POST['txtNombre'];
    $rut= $_POST['txtRut'];
    $direccion= $_POST['txtDireccion'];
    $productoS= $_POST['sltProductoS'];
    $productoP= $_POST['sltProductoP'];
    $retiro= $_POST['sltRetiro'];
    $fecha= $_POST['txtFecha'];

    if ($productoP == '0') 
    {
        $query = "select precio from platos where idPlatos= $productoS";
        $consulta= sqlsrv_query($con,$query);
        $total1 = sqlsrv_fetch_array($consulta,SQLSRV_FETCH_NUMERIC);
        $total = $total1[0];
    }
    else
    {
        $total = $productoP;
    }

    $query = "select nombre from platos where idPlatos= $productoS";
    $consulta= sqlsrv_query($con,$query);
    $nombreP = sqlsrv_fetch_array($consulta,SQLSRV_FETCH_NUMERIC);
    $nombreProducto = $nombreP[0];

    if (empty($nombreProducto)) 
    {
        $nombreProducto="Producto del proveedor, consultar informacion";    
    }


   
    $resultado = insertarCompra($nombre,$rut,$direccion,$retiro,$total,$fecha);
    if($resultado)
    {

echo "<link href='//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css' rel='stylesheet' id='bootstrap-css'>";
echo "<script src='//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js'></script>";
echo "<script src='//code.jquery.com/jquery-1.11.1.min.js'></script>";

echo '<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Recibo de compra</h2><h3 class="pull-right">Orden  '.rand().'</h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Recibo De:</strong><br>
                    '.$nombre.'<br>
                    '.$direccion.'<br>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    					<strong>Metodo de pago:</strong><br>
    				Efectivo    
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Fecha del pedido</strong><br>
    					'.date('m.d.y').'<br><br>
    				</address>
    			</div>
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Resumen</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Producto</strong></td>
        							<td class="text-center"><strong>Precio</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								<td>'.$nombreProducto.'</td>
    								<td class="text-center">'.$total.'</td>
    								<td class="text-right">'.$total.'</td>
    							</tr>
    							<tr>
    								<td class="thick-line"></td>
    								<td class="thick-line"></td>
    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
    								<td class="thick-line text-right">'.$total.'</td>
    							</tr>
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>';
        
        //echo "Plato agregdo Correctamente " . '<br/>';
        echo "<h3><a href='http://localhost/comilon/'>Volver Al Inicio</a></h3>";
        //header("Location:http://".$_SERVER['HTTP_HOST'].'/comilon');
    }
    else
     {
        echo "No se pudo agregar el Plato" . '<br/>';
        echo "<a href='http://localhost/comilon/'>Volver Al Inicio</a>";
        //header("Location:http://".$_SERVER['HTTP_HOST'].'/comilon/'); 
     }
}


?>