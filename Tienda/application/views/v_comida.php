<?php include ("navbar.php") ?>

<div class="container mt-3">
  <div class="row">

  <?php foreach ($lista as $key => $comida) {
            
            ?>


  <div class="card col-md-6">
    <img class="card-img-top" src="holder.js/100x180/" alt="Imagen">
    <div class="card-body">
      <h4 class="card-title"><?php echo $comida["C_nombre"]; ?></h4>
      <p class="card-text">Descripcion: <?php echo $comida["C_descripcion"]; ?></p>
      <p class="card-text">Precio: $<?php echo $comida["C_precio"]; ?></p>
    </div>
   </div>

   <?php }?>
   

    
  </div> 
   </div>

<?php include ("footer.php") ?>