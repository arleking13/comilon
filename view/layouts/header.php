
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mis ofertas</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php if(isset($url)){ echo $url;} ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php if(isset($url)){ echo $url;} ?>css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Proyect for duoc uc</span>
    <span class="site-heading-lower">Mis ofertas</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<?php if(isset($url)){ echo $url;} ?>index.php">Bienvenidos
              <?php if($current == 'bienvenidos'){ echo '<span class="sr-only">(current)</span>'; } ?>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<?php if(isset($url)){ echo $url;} ?>view/catalogo.php">catalogo de platos
            <?php if($current == 'catalogo'){ echo '<span class="sr-only">(current)</span>'; } ?></a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<?php if(isset($url)){ echo $url;} ?>view/menu.php">Generar menu
            <?php if($current == 'menu'){ echo '<span class="sr-only">(current)</span>'; } ?></a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="<?php if(isset($url)){ echo $url;} ?>view/pedido.php">Solicitar pedido
            <?php if($current == 'pedido'){ echo '<span class="sr-only">(current)</span>'; } ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>