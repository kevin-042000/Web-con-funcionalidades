<?php include ("navbar.php") ?>


<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        Datos de la Comida
    </div>
    <div class="card-body">
      <form action="#" method="post" enctype="multipart/form-data">
        Nombre: <input class="form-control" type="text" name="nombre" id="">
        <br/>
        Precio: <input class="form-control" type="text" name="precio" id="">
        <br/>
        Imagen de la Comida: <input class="form-control" type="file" name="imagen" id="">
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
        <tbody>
            <tr >
                <td>lalala</td>
                <td>lalaal</td>
                <td>ñalala</td>
                <td>lalaal</td>
                <td>añña</td>
                <td><a class="btn btn-danger">Eliminar</a></td>
                
                
            </tr>
            
        </tbody>
    </table>
</div>
        </div>
        
    </div>
</div>

<?php include ("footer.php") ?>

