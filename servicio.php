<?php
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/comilon/servicio2.php?wsdl");
      
    $error = $cliente->getError();
    if ($error) {
        echo "<h2>Constructor error</h2><pre>" . $error . "</pre>";
    }
      
    $result = $cliente->call("getProd", array("categoria" => "menus"));
    $result2 = $cliente->call("getProd", array("categoria" => "precios"));
    $result3 = $cliente->call("getProd", array("categoria" => "stock"));
    $porciones = explode(",",$result);
    $porciones2 = explode(",",$result2);
    $porciones3 = explode(",",$result3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
<h1><center>Stock de platos Proveedores</center></h1>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Platos</th>
      <th scope="col">Precios</th>
      <th scope="col">Stock</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php for($i=0; $i <count($porciones); $i++){ ?>
      <td><?php echo $i+1; ?></td>
      <td><?php echo $porciones[$i]; ?></td>
      <td><?php echo $porciones2[$i]; ?></td>
      <td><?php echo $porciones3[$i]; ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<h1><a href="http://localhost/comilon/view/catalogo.php" class="float-left">Volver a catalogo de SoftFood</a></h1>
</body>
</html>