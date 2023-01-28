<?php include ("navbar.php") ?>
<br>

 <div class="container">
    <div class="row">
                <div class="col-md-4">

                </div>

                <div class="col-md-4">
                  
                <div class="card">
                    <div class="card-header">
                        Inicio
                    </div>
                    <div class="card-body">
                    <form action="" name="F_R" onsubmit="registrarse()">
                    Usuario: <input class="form-control" type="text" name="Nombre">
                    <div id="error_nombre"></div>
                    <br/>
                    
                    Email: <input class="form-control" type="email" name="Email">
                    <div id="error_email"></div>
                    <br/>
                    Password: <input class="form-control" type="password" name="Password">
                    <div id="error_password"></div>
                    <br/>
                  
                    
                    <button class="btn btn-success" type="submit">Iniciar</button>
                 </form>
               
                    </div>
                    <div class="card-footer text-muted">
                        
                    </div>
                    
                </div>

                </div>

                <div class="col-md-4">
                    
                </div>

    </div>


    
</div>


<?php include ("footer.php") ?>