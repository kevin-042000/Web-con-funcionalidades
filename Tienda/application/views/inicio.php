  <!-- Incluye la barra de navegación -->
  <?php include ("navbar.php") ?>
  
<main>
  <div class="container mt-3 mb-3">
  <section class="container mb-3">
    <div class="card my-1 bg-light">
      <div class="card-header text-center">
        <h5 class="card-title">Bienvenidos</h5>
      </div>
      <div class="card-body text-center">
        <p>Estás en la página de inicio. Aquí podrás observar las noticias que se carguen.</p>
      </div>
    </div>
  </section>

  <div class="row">
    <?php foreach ($noticias as $key => $noticia) { ?>
      <div class="col-md-2"></div>
      <div class="col-md-8 mb-3">
        <div class="card">
          <div class="card-header bg-light">
            <h1 class="card-title text-center"><?php echo $noticia["I_titulo"]; ?></h1>
          </div>
          <div class="card-body">
            <h3 class="card-text text-center"><?php echo $noticia["I_subtitulo"]; ?></h3>
            <p class="card-text text-center"><?php echo $noticia["I_parrafo"]; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-2"></div>
    <?php } ?>
  </div>
</div>

</main>

<!-- Incluye el footer -->
<?php include ("footer.php") ?>
