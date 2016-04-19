<?php include ("/../../Templates/Frontend/head.php") ?>

<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-file-text-o "></i> Formulario Evento</h3>
        </div>
        <div class="panel-body">
            <section class="">
                <div class="box">
                    <div id="box-panel">
                        <form action="<?php echo url("home/evento/editar") ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Evento</label>
                                <input required type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del Evento" value="<?php echo $eventos->eve_nombre ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Categoría:</label>
                                <div class="">
                                    <select required id="categoria" name="categoria">
                                        <option value="<?php echo $eventos->cat_id ?>"><?php echo $eventos->cat_nombre ?></option>
                                        <?php foreach ($categorias as $categoria): ?>
                                            <option value="<?php echo $categoria->cat_id ?>"><?php echo $categoria->cat_nombre ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input required type="text" id="direccion" name="direccion" class="form-control" placeholder="Direccion del Evento" value="<?php echo $eventos->eve_direccion ?>">
                            </div>
                            <div class="form-group">
                                <label for="fechaHora">Fecha y Hora</label>
                                <input required type="text" id="fechaHora" name="fechaHora" class="form-control" placeholder="Fecha y hora del Evento" value="<?php echo $eventos->eve_fecha_hora ?>">
                            </div>
                            <div class="form-group">
                                <label for="nombreContacto">Nombre Contacto</label>
                                <input required type="text" id="nombreContacto" name="nombreContacto" class="form-control" placeholder="Nombre del Contacto" value="<?php echo $eventos->eve_nombre_contacto ?>">
                            </div>
                            <div class="form-group">
                                <label for="telefonoContacto">Teléfono Contacto</label>
                                <input required type="number" id="telefonoContacto" name="telefonoContacto" class="form-control" placeholder="Teléfono del Contacto" value="<?php echo $eventos->eve_telefono_contacto ?>">
                            </div>
                            <div class="form-group">
                                <label for="emailContacto">Email Contacto</label>
                                <input required type="email" id="emailContacto" name="emailContacto" class="form-control" placeholder="Email del Contacto" value="<?php echo $eventos->eve_correo_contacto ?>">
                            </div>
                            <div class="form-group">
                                <label for="boleta">Valor Boleta</label>
                                <input required type="number" id="boleta" name="boleta" class="form-control" placeholder="Valor de la Boleta" value="<?php echo $eventos->eve_valor_boleta ?>">
                            </div>

                            <div class="form-group">
                                <label for="descripcion" class="control-label">Descripción:</label>
                                <div class="">
                                    <textarea required id="descripcion" name="descripcion" class="form-control" rows="5" id="comment"><?php echo $eventos->eve_descripcion ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Imagen</label>
                                <input type="file" id="imagen" name="imagen" value="<?php echo $eventos->img_ruta ?>">
                                <p class="help-block"><?php echo $eventos->img_ruta ?></p>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <input type="submit" class="btn btn-default" value="Editar">
                                    <a class="btn btn-default btn-cancel" value="Cancelar" href="<?php echo url("panelcontrol") ?>">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?php include ("/../../Templates/Frontend/foot.php") ?>
