<?php include ("navbar.php") ?>

<div class="container mt-3">

<section class="container">
  <div class="card my-1 bg-light">
    <div class="card-header text-center">
      <h5 class="card-title">Menu de Bebidas</h5>
    </div>
    <div class="card-body text-center">
      <p>Aquí podrás observar las bebidas que se carguen.</p>
    </div>
  </div>
</section>




  <div class="row">

  <?php foreach ($lista as $key => $bebida) {
            
            ?>


  <div class="card col-md-6">
    
    <div class="card-body">
      <h4 class="card-title"><?php echo $bebida["B_nombre"]; ?></h4>
      <p class="card-text">Marca: <?php echo $bebida["B_marca"]; ?></p>
      <p class="card-text">Descripcion: <?php echo $bebida["B_descripcion"]; ?></p>
      <p class="card-text">Precio: $<?php echo $bebida["B_precio"]; ?></p>
    </div>
   </div>

   <?php }?>
   
    
  </div> 
   </div>

<?php include ("footer.php") ?>