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
            <?php if (Session::has("usuarioEditado")):?>
    <div class="alert alert-info alert-dismissible center-block" role="alert"><?php echo Session::get("usuarioEditado") ?></div>
                <?php endif ?>
            <form class="form-horizontal" method="post" action="<?php echo url("usuario/editar") ?>">
                <div class="form-group redSocial-titulo">

                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Nombre:</label>
                    <div class="col-xs-9">
                        <input required type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" value="<?php echo $usuario->dus_nombre ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Apellidos:</label>
                    <div class="col-xs-9">
                        <input required type="text" class="form-control" placeholder="Apellidos" id="apellidos" name="apellidos" value="<?php echo $usuario->dus_apellidos ?>">
                    </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-xs-3">Email:</label>
                    <div class="col-xs-9">
                        <input required type="email" class="form-control" placeholder="Email" id="email" name="email" value="<?php echo $usuario->dus_correo ?>">
                    </div>
                </div>                             
                <div class="form-group">
                    <label class="control-label col-xs-3">Fecha de Nacimiento:</label>
                    <div class="col-xs-9">
                        <input required type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $usuario->dus_fecha_nacimiento ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Género :</label>
                    <div class="col-xs-9">
                        <select required id="genero" name="genero">
                            <option value="<?php echo $usuario->dus_genero ?>">
                                <?php if ($usuario->dus_genero === 'M'):
                                    $usuario->dus_genero = "Masculino";
                                else: $usuario->dus_genero = "Femenino";
                                endif;
?>
                                <?php echo $usuario->dus_genero ?></option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                </div>
               
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-default" value="Editar">
                        <a class="btn btn-default btn-cancel" value="Cancelar" href="<?php echo url("home/index") ?>">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>