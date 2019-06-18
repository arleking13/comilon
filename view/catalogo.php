<?php
    include_once 'route.php' ;
    include_once 'layouts/header.php'; 
    include_once '../controller/PlatosController.php';  include_once('../db/database.php'); ?>
    

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-5">
                <span class="section-heading-upper">Comilon</span>
                <span class="section-heading-lower">Catalogo</span>
              </h2>
              <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                <li class="list-unstyled-item list-hours-item d-flex">
                  Platos
                  <span class="ml-auto">Precio</span>
                </li>

                <?php $query = "exec spmostrar_platos";  $consulta= sqlsrv_query($con,$query);  ?> 
                <?php while($resultado = sqlsrv_fetch_array($consulta,SQLSRV_FETCH_ASSOC)){ ?>
                <li class="list-unstyled-item list-hours-item d-flex">
                  <?php echo $resultado['nombre']; ?>
                  <span class="ml-auto"><?php echo $resultado['precio']; ?></span>
                </li>
                <?php } ?>
              </ul>
              <p class="address mb-5">
                <em>
                  <strong>Av. Concha Y Toro 1340</strong>
                  <br>
                  Puente Alto, Región Metropolitana
                </em>
              </p>
              <p class="mb-0">
                <small>
                  <em>Contactanos</em>
                </small>
                <br>
                (2) 2354 0948
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include_once 'layouts/footer.php'; ?>