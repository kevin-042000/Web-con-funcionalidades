<?php include ("navbar.php") ?>

<div class="container mt-3">
  <div class="row">

  <?php foreach ($lista as $key => $bebida) {
            
            ?>


  <div class="card col-md-6">
    <img class="card-img-top" src="holder.js/100x180/" alt="Imagen">
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