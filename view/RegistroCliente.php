<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
            <form class="form-horizontal" role="form" id="sbtRegistrar" name="sbtRegistrar" method="POST" action="../controller/UsuarioController.php">
                <h2>Registro de cliente</h2>
                <div class="form-group">
                    <label for="txtRut" class="col-sm-3 control-label">Rut</label>
                    <div class="col-sm-9">
                        <input type="text" id="txtRut" name="txtRut" placeholder="RUT" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtNombre" class="col-sm-3 control-label">Nombre</label>
                    <div class="col-sm-9">
                        <input type="text" id="txtNombre" name="txtNombre" placeholder="Nombre" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtApellido" class="col-sm-3 control-label">Apellido </label>
                    <div class="col-sm-9">
                        <input type="text" id="txtApellido"  placeholder="Apellido" class="form-control" name= "txtApellido">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtDireccion" class="col-sm-3 control-label">Direccion</label>
                    <div class="col-sm-9">
                        <input type="text" id="txtDireccion" name="txtDireccion" placeholder="Direccion" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtTelefono" class="col-sm-3 control-label">Telefono</label>
                    <div class="col-sm-9">
                        <input type="text" id="txtTelefono" name="txtTelefono" placeholder="Telefono" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtMail" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="text" id="txtMail" name="txtMail" placeholder="Email" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtUsuario" class="col-sm-3 control-label">Usurio</label>
                    <div class="col-sm-9">
                        <input type="text" id="txtUsuario" name="txtUsuario" placeholder="Usuario" class="form-control" autofocus>
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtPass" class="col-sm-3 control-label">Contraseña</label>
                    <div class="col-sm-9">
                        <input type="password" id="txtPass" name="txtPass" placeholder="Password" class="form-control">
                    </div>
                </div>
                <button type="submit" id="sbtRegistrar" value="sbtRegistrar" name="sbtRegistrar" class="btn btn-primary btn-block">Register</button>
            </form> <!-- /form -->
            <h3><a href='http://localhost/comilon/'>Volver Al Inicio</a></h3>
        </div> <!-- ./container -->