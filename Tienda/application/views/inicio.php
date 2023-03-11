<?php include ("navbar.php") ?>



  <main>
  <div class="container mt-3 mb-3">
  <div class="row">

  <?php foreach ($noticias as $key =>$noticia ) {
            
            ?>
<div class="col-md-2">
    
    </div>

  <div class="card col-md-8 mb-3">
    <div class="card-body">
      <h1 class="card-title"><?php echo $noticia["I_titulo"]; ?></h1>
      <h3 class="card-text"> <?php echo $noticia["I_subtitulo"]; ?></h3>
      <p class="card-text"><?php echo $noticia["I_parrafo"]; ?></p>
    </div>
   </div>
   


  
   <div class="col-md-2">
    
   </div>

   <?php }?>

  </div> 
   </div>

  </main>


  <?php include ("footer.php") ?>