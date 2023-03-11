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
        Marca: <input class="form-control" type="text" name="marca" id="">
        <br/>
        Precio: <input class="form-control" type="text" name="precio" id="">
        <br/>
        Imagen de la Bebida: <input class="form-control" type="file" name="imagen" id="">
        <br/>
        <label>Descripcion</label>
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
                <th >Imagen</th>
                <th >Descripcion</th>
                <th >Accion</th>
            </tr>
        </thead>
        <?php foreach ($lista as $key => $bebida) {
            
            ?>

        <tbody>
            <tr >
                <td><?php echo $bebida["ID_bebidas"] ?></td>
                <td><?php echo $bebida["B_nombre"] ?></td>
                <td><?php echo $bebida["B_precio"] ?></td>
                <td>-</td>
                <td><?php echo $bebida["B_descripcion"] ?></td>
                
                <td><a class="btn btn-danger">Eliminar</a></td>
                
                
            </tr>
        </tbody>

        <?php } ?>
    </table>
</div>
        </div>
        
    </div>
</div>

<?php include ("footer.php") ?>





