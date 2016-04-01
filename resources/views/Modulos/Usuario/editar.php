<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<section class="container container-fluid">
            <div class="page-header">
                <h1>Editar Usuario</h1>
            </div> 
            <form class="form-horizontal" action="<?php echo url("usuario/editar") ?>" method="post">
                <div class="form-group">
                    <label for="nombre" class="col-xs-2 control-label">Nombre</label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del Usuario" value="<?php echo $usuario->nombre ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="apellidos" class="col-xs-2 control-label">Apellidos</label>
                    <div class="col-xs-5">
                        <input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos del Usuario" value="<?php echo $usuario->apellidos ?>">
                    </div>
                </div>
                <input type="hidden" value="<?php echo $usuario->id ?>" name="id">
               <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                        <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs">Actualizar</button>
                        <a href="<?php echo url("usuario/listar") ?>" class="btn btn-danger hidden-xs">Volver</a>
                        <a href="<?php echo url("usuario/listar") ?>" class="btn btn-danger btn-block btn-lg visible-xs">Volver</a>
                    </div>
                </div>
            </form>
</section>>


      <?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>
