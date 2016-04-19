<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-file-text-o "></i> Formulario Administrador</h3>
        </div>
        <div class="panel-body">
            <section class="">
                <div class="box">
                    <div id="box-panel">
                                                <form action="<?php echo url("seguridad/editaradmin") ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Nombre:</label>
                        <input required type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre" value="<?php echo $usuario->dus_nombre ?>">
                </div>
                <div class="form-group">
                    <label >Apellidos:</label>
                        <input required type="text" class="form-control" placeholder="Apellidos" id="apellidos" name="apellidos" value="<?php echo $usuario->dus_apellidos ?>">  
                </div> 
                <div class="form-group">
                    <label >Email:</label>
                        <input required type="email" class="form-control" placeholder="Email" id="email" name="email" value="<?php echo $usuario->dus_correo ?>">   
                </div>                             
                <div class="form-group">
                    <label >Fecha de Nacimiento:</label>
                        <input required type="date" class="form-control" id="fecha" name="fecha" value="<?php echo $usuario->dus_fecha_nacimiento ?>">   
                </div>
                <div class="form-group">
                    <label class="control-label">Género :</label>
                    <div class="">
                        <select required id="genero" name="genero">
                            <option value="<?php echo $usuario->dus_genero ?>">
                                <?php if ($usuario->dus_genero === 'M'):
                                    $usuario->dus_genero = "Masculino";
                                else: $usuario->dus_genero = "Femenino";
                                endif; ?>
                                <?php echo $usuario->dus_genero ?></option>
                            <option value="M">Masculino</option>
                            <option value="F">Femenino</option>
                        </select>
                    </div>
                </div>
               
                <br>
                <div class="form-group">
                    <div >
                        <input type="submit" class="btn btn-default" value="Editar">
                        <a class="btn btn-default btn-cancel" value="Cancelar" href="<?php echo url("panelcontrol") ?>">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
        </div>
    </div></div>
