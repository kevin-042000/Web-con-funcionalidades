<?php include ("navbar.php") ?>


<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        Datos de la Bebida
    </div>
    <div class="card-body">
      <form action="<?php echo base_url()?>C_c_bebidas/save"  method="post" enctype="multipart/form-data">
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
        <?php foreach ($lista as $key => $bebidas) {
            
            ?>

        <tbody>
            <tr >
                <td><?php echo $bebidas["ID_bebidas"] ?></td>
                <td><?php echo $bebidas["B_nombre"] ?></td>
                <td><?php echo $bebidas["B_precio"] ?></td>
                <td><?php echo $bebidas["B_descripcion"] ?></td>
                
       
                 <th><a class="btn btn-danger" href="<?php echo base_url() ?>C_c_bebidas/eliminar/<?php echo $bebidas["ID_bebidas"]; ?>">Eliminar</a></th>
         
                
            </tr>
        </tbody>

        <?php } ?>
    </table>
</div>
        </div>
        
    </div>
</div>

<?php include ("footer.php") ?>