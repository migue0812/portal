<?php include ("/../../Templates/Frontend/head.php") ?>

<section class="main container">
  <div class="row">
    <div class="jumbotron boxuser">        
        <div class="form-group">
          <label class="control-label col-xs-3">Nombre:</label>
              <label class="control-label"><?php echo $usuario->dus_nombre ?></label>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Apellidos:</label>
              <label class="control-label"><?php echo $usuario->dus_apellidos ?></label>
        </div>
        <div class="form-group">
          <div class="form-group">
          <label class="control-label col-xs-3">Usuario:</label>
              <label class="control-label"><?php echo $usuario->usu_usuario ?></label>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Email:</label>
              <label class="control-label"><?php echo $usuario->dus_correo ?></label>
        </div>                             
        <div class="form-group">
         <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
              <label class="control-label"><?php echo $usuario->dus_fecha_nacimiento ?></label>
        </div>
        <div class="form-group">
          <label class="control-label col-xs-3">Género:</label>
          <?php if ($usuario->dus_genero === 'M'):?>
              <label class="control-label">Masculino</label>
              <?php else :?>
              <label class="control-label">Femenino</label>
              <?php endif ?>
        </div>
    </div>
  </div>
</section>
