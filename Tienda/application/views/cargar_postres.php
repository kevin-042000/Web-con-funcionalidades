<?php include ("navbar.php") ?>


<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        Datos del  Postre
    </div>
    <div class="card-body">
      <form action="<?php echo base_url()?>C_c_postres/save"  method="post" enctype="multipart/form-data">
        Nombre: <input class="form-control" type="text" name="nombre" id="">
        <br/>
        Precio: <input class="form-control" type="text" name="precio" id="">
        <br/>
        
        <label>Descripcion:</label>
        <textarea class="form-control" name="descripcion" rows="3"></textarea>
        <br/>
        <input class="btn btn-success" type="submit" value="Guardar Datos">
      </form>

    </div>
</div>
           
        </div>
        <div class="col-md-6">
        <div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th >ID</th>
                <th >Nombre</th>
                <th >Precio</th>
                <th >Descripcion</th>
                <th >Accion</th>
            </tr>
        </thead>
        <?php foreach ($lista as $key => $postres) {
            
            ?>

        <tbody>
            <tr >
                <td><?php echo $postres["ID_postres"] ?></td>
                <td><?php echo $postres["P_nombre"] ?></td>
                <td><?php echo $postres["P_precio"] ?></td>
                <td><?php echo $postres["P_descripcion"] ?></td>
                
       
                 <th><a class="btn btn-danger" href="<?php echo base_url() ?>C_c_postres/eliminar/<?php echo $postres["ID_postres"]; ?>">Eliminar</a></th>
         
                
            </tr>
        </tbody>

        <?php } ?>
    </table>
</div>
        </div>
        
    </div>
</div>

<?php include ("footer.php") ?>