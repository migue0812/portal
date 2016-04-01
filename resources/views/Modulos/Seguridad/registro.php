<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<section class="main container">
  <div class="row">
    <div class="jumbotron boxuser">
      <form class="form-horizontal" method="post" action="<?php echo url("seguridad/registro") ?>">
        <div class="form-group redSocial-titulo">
          <label class="control-label">Regístrate con:</label>
          <div class="col-xs-12 redSocial">
            <a class="btn icon-facebook-with-circle facebook-btn"></a>
            <a class="btn icon-google-with-circle google-plus-btn"></a>
            <a class="btn icon-twitter-with-circle twitter-btn"></a>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Nombre:</label>
          <div class="col-xs-9">
            <input required type="text" class="form-control" placeholder="Nombre" id="registro[nombre]" name="registro[nombre]">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Apellidos:</label>
          <div class="col-xs-9">
            <input required type="text" class="form-control" placeholder="Apellidos" id="registro[apellidos]" name="registro[apellidos]">
          </div>
        </div> 
        <div class="form-group">
          <label class="control-label col-xs-3">Usuario:</label>
          <div class="col-xs-9">
            <input required type="text" class="form-control" placeholder="Usuario" id="nick" name="registro[nick]">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Password:</label>
          <div class="col-xs-9">
            <input required type="password" class="form-control" placeholder="Password" id="registro[password]" name="registro[password]">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Confirmar Password:</label>
          <div class="col-xs-9">
            <input required type="password" class="form-control" placeholder="Confirmar Password" id="registro[password2]" name="registro[password2]">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Email:</label>
          <div class="col-xs-9">
            <input required type="email" class="form-control" placeholder="Email" id="registro[email]" name="registro[email]">
          </div>
        </div>                             
        <div class="form-group">
          <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
          <div class="col-xs-9">
            <input required type="date" class="form-control" id="registro[fecha]" name="registro[fecha]">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Genero:</label>
          <div class="col-xs-2">
            <label class="radio-inline">
              <input required type="radio" name="registro[genero]" value="M" id="registro[generoM]">Maculino
            </label>
          </div>
          <div class="col-xs-2">
            <label class="radio-inline">
              <input required type="radio" name="registro[genero]" value="F" id="registro[generoF]">Femenino
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
              <input type="checkbox" value="agree">Acepto <a href="#">Terminos y Condiciones</a>.
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