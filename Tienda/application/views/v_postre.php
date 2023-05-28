<?php include ("navbar.php") ?>

<div class="container mt-3">
  <section class="container mb-3">
    <div class="card my-1 bg-light">
      <div class="card-header text-center">
        <h5 class="card-title">Menú de Postres</h5>
      </div>
      <div class="card-body text-center">
        <p>Aquí podrás observar los postres que se carguen.</p>
      </div>
    </div>
  </section>

  <div class="row">
    <?php foreach ($lista as $key => $postre) { ?>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-light">
            <h4 class="card-title text-center"><?php echo $postre["P_nombre"]; ?></h4>
          </div>
          <div class="card-body">
            <p class="card-text text-center">Descripción: <?php echo $postre["P_descripcion"]; ?></p>
          </div>
          <div class="card-footer">
            <p class="card-text text-center">Precio: $<?php echo $postre["P_precio"]; ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>



<?php include ("footer.php") ?>