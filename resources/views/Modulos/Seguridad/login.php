<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<section class="main container">
    <?php if (Session::has("usuarioRegistrado")):?>
    <div class="alert alert-success center-block" role="alert"><?php echo Session::get("usuarioRegistrado") ?></div>
    
        <?php //Session::forget("usuarioRegistrado")?>
  <?php endif ?>
  <?php if (Session::has("usuarioInvalido")):?>
    <div class="alert alert-danger center-block" role="alert"><?php echo Session::get("usuarioInvalido")?></div>
  <?php endif ?>
  <div class="row">
    <div class="form-group redSocial-titulo">
      <label class="control-label">Ingresa con:</label>
      <div class="col-xs-12 redSocial">
        <a class="btn icon-facebook-with-circle facebook-btn"></a>
        <a class="btn icon-google-with-circle google-plus-btn"></a>
        <a class="btn icon-twitter-with-circle twitter-btn"></a>
      </div>
    </div>
    <div class="jumbotron boxuserdos">
      <form method="POST" action="<?php echo url("seguridad/login") ?>" class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-xs-3">Nombre:</label>
          <div class="col-xs-9">
            <input required type="text" class="form-control" placeholder="Nombre" id="login[user]" name="login[user]">
          </div>
        </div>        
        <div class="form-group">
          <label class="control-label col-xs-3">Password:</label>
          <div class="col-xs-9">
            <input required type="password" class="form-control" id="inputPassword" placeholder="Password" id="login[password]" name="login[password]">
          </div>
        </div>

        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <label class="checkbox-inline">
              <input type="checkbox" value="agree">Recordarme
            </label>
          </div>
        </div>
        <br>
        <div class="form-group">
          <div class="col-xs-offset-3 col-xs-9">
            <input type="submit" class="btn btn-default" value="Ingresar">
            <a class="btn btn-default btn-cancel" value="Guardar" href="<?php echo url("home/index") ?>">Cancelar</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</section>

<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>
