<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<section class="main container">
  <div class="row">
    <div class="jumbotron boxuser">
         <?php if ($errors->any()): ?>
                         <div class="alert alert-danger alert-dismissible center-block" role="alert">
                             <ul>
                              <?php foreach ($errors->all() as $error): ?>  
                                 <li><?php echo $error ?></li>
                                 <?php endforeach ?>
                             </ul>
                         </div>
                        <?php endif ?>
      <form class="form-horizontal" method="post" action="<?php echo url("seguridad/registro") ?>">
        <div class="form-group redSocial-titulo">
          
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Nombre:</label>
          <div class="col-xs-9">
            <input required type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Apellidos:</label>
          <div class="col-xs-9">
            <input required type="text" class="form-control" placeholder="Apellidos" id="apellidos" name="apellidos">
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-xs-3">Password:</label>
          <div class="col-xs-9">
            <input required type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Confirmar Password:</label>
          <div class="col-xs-9">
            <input required type="password" class="form-control" placeholder="Confirmar Contraseña" id="password_confirmation" name="password_confirmation">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Email:</label>
          <div class="col-xs-9">
            <input required type="email" class="form-control" placeholder="Email" id="email" name="email">
          </div>
        </div>                             
        <div class="form-group">
          <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
          <div class="col-xs-9">
            <input required type="date" class="form-control" id="fecha" name="fecha">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Género:</label>
          <div class="col-xs-2">
            <label class="radio-inline">
              <input required type="radio" name="genero" value="M" id="generoM">Masculino
            </label>
          </div>
          <div class="col-xs-2">
            <label class="radio-inline">
              <input required type="radio" name="genero" value="F" id="generoF">Femenino
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
              <input type="checkbox" value="news">Recibir Notificaciones.
            </label>
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
              <input type="checkbox" value="agree">Acepto <a href="#">Términos y Condiciones</a>.
            </label>
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-default" value="Registrar">
            <a class="btn btn-default btn-cancel" value="Guardar" href="<?php echo url("home/index") ?>">Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>