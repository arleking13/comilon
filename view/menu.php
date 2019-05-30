<?php
    include_once 'route.php' ;
    include_once 'layouts/header.php'; ?>

<!-- Button trigger modal -->
  <button type="button" class="buttonModal btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Crea tu menu!
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Selecciona tu preferencia!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>


        <div class="modal-body">

          <!-- Pasos del flujo formulario -->
          <div class="step_1">

            <Label>Modalidad</Label>
            <!-- Default unchecked -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
              <label class="custom-control-label" for="defaultUnchecked">Semanal</label>
            </div>

            <!-- Default checked -->
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" id="defaultChecked" name="defaultExampleRadios" checked>
              <label class="custom-control-label" for="defaultChecked">Mensual</label>
            </div>

          </div>

        </div>



        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Crea tu menu empresas</span>
              <span class="section-heading-lower">Semanal o mensual!</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="../img/comidaempresarial.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Contamos con un servicio especial para empresa, consiste en crear configurar a tu gusto el menu semanal o mensual por medio de una suscripcion con tu empresa. Esto quiere decir que tendremos tu comida preferida para cada dia preparada y lista en tu hora de colacion sin tener que moverte de tu trabajo!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-lower">Necesitas retirar en <strong>local?</strong></span>
              <span class="section-heading-upper">Nosotros te lo preparamos al instante!</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="../img/local.jpg" alt="">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Contamos con las personas mas energicas y capacitadas para darte un servicio de calidad.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">From Around the World</span>
              <span class="section-heading-lower">Bulk Speciality Blends</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="../img/products-03.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.</p>
          </div>
        </div>
      </div>
    </div>
  </section> -->

<?php include_once 'layouts/footer.php'; ?>