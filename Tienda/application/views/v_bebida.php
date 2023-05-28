<?php include ("navbar.php") ?>

<div class="container mt-3">
  <section class="container mb-3">
    <div class="card my-1 bg-light">
      <div class="card-header text-center">
        <h5 class="card-title">Menú de Bebidas</h5>
      </div>
      <div class="card-body text-center">
        <p>Aquí podrás observar las bebidas que se carguen.</p>
      </div>
    </div>
  </section>

  <div class="row">
    <?php foreach ($lista as $key => $bebida) { ?>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-light">
            <h4 class="card-title text-center"><?php echo $bebida["B_nombre"]; ?></h4>
          </div>
          <div class="card-body">
            <p class="card-text text-center">Descripción: <?php echo $bebida["B_descripcion"]; ?></p>
          </div>
          <div class="card-footer">
            <p class="card-text text-center">Precio: $<?php echo $bebida["B_precio"]; ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>