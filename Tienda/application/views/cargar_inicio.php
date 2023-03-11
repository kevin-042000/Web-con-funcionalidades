<?php include ("navbar.php") ?>


<br/>

<div class="container">
    <div class="row">
        <div class="col-md-6">
        <div class="card">
    <div class="card-header">
        Guardar Noticias de Inicio
    </div>
    <div class="card-body">
      <form action="<?php echo base_url()?>C_c_inicio/save"  method="post" enctype="multipart/form-data">
        Titulo: <input class="form-control" type="text" name="titulo" id="">
        <br/>
        Subtitulo: <input class="form-control" type="text" name="subtitulo" id="">
        <br/>
        Imagen: <input class="form-control" type="file" name="imagen" id="">
        <br/>
        <label>Parrafo</label>
        <textarea class="form-control" name="parrafo" rows="3"></textarea>
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
                <th >Titulo</th>
                <th >Subtitulo</th>
                <th >Imagen</th>
                <th >Parrafo</th>
                <th >Accion</th>
            </tr>
        </thead>
        <?php foreach ($noticias as $key => $noticia) {
            
            ?>

        <tbody>
            <tr >
                <td><?php echo $noticia["ID_inicio"] ?></td>
                <td><?php echo $noticia["I_titulo"] ?></td>
                <td><?php echo $noticia["I_subtitulo"] ?></td>
                <td>-</td>
                <td><?php echo $noticia["I_parrafo"] ?></td>
                
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

