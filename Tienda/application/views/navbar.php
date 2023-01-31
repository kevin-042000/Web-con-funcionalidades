<!doctype html>
<html lang="en">
  <head>
  <title>Web</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="../public/css/estilos.css" rel="stylesheet">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
  <header>
   
 

  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
 
   <div class="container-fluid">
      <a class="navbar-brand" href="#">Restaurante</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
     <div class="collapse navbar-collapse" id="navbarNavDropdown">
         <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>C_inicio">Inicio</a>
         </li>
        
       
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu de Comida
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_v_comida">Comidas</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_v_bebida">Bebidas</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_v_postre">Postres</a></li>
          </ul>
         </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Administrador
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_c_comidas">Cargar Comidas</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_c_bebidas">Cargar Bebidas</a></li>
            <li><a class="dropdown-item" href="<?php echo base_url()?>C_c_postres">Cargar Postres</a></li>
          </ul>
         </li>
        </div>
    

     
     <div class="collapse navbar-collapse " id="navbarNavDropdown">

         <ul class="navbar-nav  ">
            <li class="nav-item">
                 <a class="nav-link active " aria-current="page" href="<?php echo base_url()?>C_registro">Registrarse</a>
            </li>
            <li class="nav-item ">
                 <a class="nav-link active" href="<?php echo base_url()?>C_login">Iniciar</a>
            </li>
          </ul>

      </div>

    </div>

  </nav>
  

</header>

