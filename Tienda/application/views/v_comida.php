<?php include ("navbar.php") ?>

<div class="container mt-3">
  <section class="container mb-3">
    <div class="card my-1 bg-light">
      <div class="card-header text-center">
        <h5 class="card-title">Menú de Comidas</h5>
      </div>
      <div class="card-body text-center">
        <p>Aquí podrás observar las comidas que se carguen.</p>
      </div>
    </div>
  </section>

  <div class="row">
    <?php foreach ($lista as $key => $comida) { ?>
      <div class="card col-md-6">
        <div class="card-header bg-light">
        <h4 class="card-title text-center"><?php echo $comida["C_nombre"]; ?></h4>
        </div>
        <div class="card-body">
          <p class="card-text text-center">Descripción: <?php echo $comida["C_descripcion"]; ?></p>
        </div>
        <div  class="card-footer">
        <p class="card-text text-center">Precio: $<?php echo $comida["C_precio"]; ?></p>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<?php include ("footer.php") ?>
