<?php include_once '../controller/PlatosController.php';  include_once('../db/database.php'); ?>
<?php $query = "exec spmostrar_platos";  $consulta= sqlsrv_query($con,$query);  ?>

<?php
    require_once "../lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/comilon/servicio2.php?wsdl");
          
    $result = $cliente->call("getProd", array("categoria" => "menus"));
    $result2 = $cliente->call("getProd", array("categoria" => "precios"));
    $result3 = $cliente->call("getProd", array("categoria" => "stock"));
    $porciones = explode(",",$result);
    $porciones2 = explode(",",$result2);
    $porciones3 = explode(",",$result3);

?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../vendor/datetime/css/bootstrap-datetimepicker.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="../vendor/datetime/js/datetimepicker.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<br>
<h1>Realizar Compra</h1>
<form class="form-horizontal" id="sbtPedido" name="sbtPedido" method="POST" action="../controller/boletaNormalController.php">

<div class="container col-md-4">
    <div class="form-group"> 
        <label for="txtNombre" class="control-label">Nombre</label>
        <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre">
    </div>    


    <div class="form-group"> <!-- Street 1 -->
        <label for="txtRut" class="control-label">Rut</label>
        <input type="text" class="form-control" id="txtRut" name="txtRut" placeholder="Rut">
    </div> 


    <div class="form-group"> <!-- Street 1 -->
        <label for="txtDireccion" class="control-label">Direccion</label>
        <input type="text" class="form-control" id="txtDireccion" name="txtDireccion" placeholder="Direccion">
    </div>    

    
    <div class="form-group">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Seleecione Producto de SoftFood</label>
      <select class="custom-select mr-sm-2" id="sltProductoS" name="sltProductoS">
        <option  value="0" selected>Seleccione Plato..</option>
        <?php while($resultado = sqlsrv_fetch_array($consulta,SQLSRV_FETCH_ASSOC)){ ?>
        <option value="<?php echo $resultado['idPlatos']; ?>"> <?php echo $resultado['nombre']; ?></option>
        <?php } ?>
      </select>
    </div> 
    
    <div class="form-group">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Seleecione Producto de Proveedor Externo</label>
      <select class="custom-select mr-sm-2" id="sltProductoP" name="sltProductoP">
      <option value="0" selected>Seleccione Plato..</option>
      <?php for($i=0; $i <count($porciones); $i++){ ?>
        <option value="<?php echo $porciones2[$i] ?>"><?php echo $porciones[$i] ?></option>
        <?php } ?>
      </select>
    </div>               
                            
    <div class="form-group">
      <label class="mr-sm-2" for="inlineFormCustomSelect">Tipo De Retiro:</label>
      <select class="custom-select mr-sm-4" id="sltRetiro" name="sltRetiro">
        <option value ="0" selected>Seleccione</option>
        <option value="1">Local</option>
        <option value="2">Domicilio</option>
      </select>
    </div> 
                                
    <div class="form-group">
    <label class="mr-sm-2 control-label" for="">Indique hora de retiro o despacho(15 Minutos desde la transaccion)</label>
    <input size="30" type="text" id="txtFecha" name="txtFecha"  class="form_datetime">
    </div>
    <div class="form-group"> <!-- Submit Button -->
        <button type="submit" value="sbtPedido" id="sbtPedido" name="sbtPedido" class="btn btn-primary btn*lg">Realizar Pedido</button>
    </div>     
    
</form>
<h3><a href='http://localhost/comilon/'>Volver Al Inicio</a></h3>
</div>

<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: "2019-06-01 10:00",
        minuteStep: 10
    });
</script>   