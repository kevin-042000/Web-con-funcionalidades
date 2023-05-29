<!doctype html>
<html lang="en">
  <head>
  <title>Restaurante-Menu-Web</title>
  <link rel="icon" href="https://i.pinimg.com/564x/0e/ed/22/0eed22b77375a894d7d195c90be7a8d6.jpg" type="image/jpeg">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<!-- Css -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://veracious-plating.000webhostapp.com/sass_css/css/estilo.css">
   



</head>

<body>

  <header>
   
 <nav class="navbar navbar-expand-lg navbar-dark  bg-secondary">
  <div class="container-fluid">
    <img class="logo" src="/public/iconos/restaurantes.png">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>C_inicio">Noticias <img class="icon-nav" src="/public/iconos/periodico02.png"></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu Comida <img class="icon-nav" src="/public/iconos/menu.png">
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_v_comida">Comidas <img class="icono-comida" src="../public/iconos/hamburguesa.png" alt="hamburguesa"></a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_vv_bebida">Bebidas <img class="icono-comida" src="../public/iconos/bebidas-sin-alcohol.png" alt="bebida"></a></li>                      
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_v_postre">Postres <img class="icono-comida" src="../public/iconos/postre.png" alt="postre"></a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Administrador <img class="icon-nav" src="/public/iconos/panel_control.png">
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_c_noticias">Cargar Noticia <img class="icon-nav" src="/public/iconos/blogger.png"></a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_c_comidas">Cargar Comidas <img class="icono-comida" src="../public/iconos/hamburguesa.png" alt="hamburguesa"></a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_c_bebidas">Cargar Bebidas <img class="icono-comida" src="../public/iconos/bebidas-sin-alcohol.png" alt="bebida"></a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_c_postres">Cargar Postres <img class="icono-comida" src="../public/iconos/postre.png" alt="postre"></a></li>
          </ul>
         </li>
      </ul>


      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active " aria-current="page" href="<?php echo base_url()?>C_registro">Registrarse</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" href="<?php echo base_url()?>C_login">Iniciar</a>
        </li>
        
        
      </ul>
      
    </div>
  </div>
</nav>






   
 
</header>

