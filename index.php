<?php 
  $current = "bienvenidos";
  include_once 'view/layouts/header.php'; ?>

  <style>
    .marcas{
      width: 100%;
      height: 150px;
    }
  </style>

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Pedido a domicilio?</span>
            <span class="section-heading-lower">Lalamove delivery</span>
          </h2>
          <p class="mb-3">
            Vive la experiencia de recibir en tus manos, tu plato o comida favorita con una atencion inmediata y sin moverte de tu hogar! Contamos con un equipo de persona preparadas y capacitadas para cumplir con los tiempos acoordados!
          </p>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">Buscanos!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Productos</span>
              <span class="section-heading-lower">Prefiere nuestras marcas</span>
            </h2>
            <!-- imagenes de marcas -->
            <div class="marcas">
              <img src="img/marcas/burgerking.jpg" alt="">
              <img src="img/marcas/mcdonalds.jpg" alt="">
              <img src="img/marcas/pizzahuts.jpg" alt="">
              <img src="img/marcas/starbucks.jpg" alt=""> 
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include_once 'view/layouts/footer.php'; ?>