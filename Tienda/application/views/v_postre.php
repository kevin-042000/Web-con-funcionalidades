<?php include ("navbar.php") ?>

<div class="container mt-3">
  <div class="row">

  <?php foreach ($lista as $key => $postre) {
            
            ?>


  <div class="card col-md-6">
    <div class="card-body">
      <h4 class="card-title"><?php echo $postre["P_nombre"]; ?></h4>
      <p class="card-text">Descripcion: <?php echo $postre["P_descripcion"]; ?></p>
      <p class="card-text">Precio: $<?php echo $postre["P_precio"]; ?></p>
    </div>
   </div>

   <?php }?>

  </div> 
   </div>

<?php include ("footer.php") ?>