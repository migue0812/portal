<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-file-text-o "></i> Formulario Evento</h3>
        </div>
        <div class="panel-body">
            <section class="">
                <div class="box">
                    <div id="box-panel">
                        <form action="<?php echo url("home/evento/registrar") ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Evento</label>
                                <input required type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre del Evento">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Categoría:</label>
                                <div class="">
                                    <select required id="categoria" name="categoria">
                                        <?php foreach ($categorias as $categoria): ?>
                                            <option value="<?php echo $categoria->cat_id ?>"><?php echo $categoria->cat_nombre ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input required type="text" id="direccion" name="direccion" class="form-control" placeholder="Direccion del Evento">
                            </div>
                            <div class="form-group">
                                <label for="fechaHora">Fecha y Hora</label>
                                <input required type="datetime-local" id="fechaHora" name="fechaHora" class="form-control" placeholder="Fecha y hora del Evento">
                            </div>
                            <div class="form-group">
                                <label for="nombreContacto">Nombre Contacto</label>
                                <input required type="text" id="nombreContacto" name="nombreContacto" class="form-control" placeholder="Nombre del Contacto">
                            </div>
                            <div class="form-group">
                                <label for="telefonoContacto">Teléfono Contacto</label>
                                <input required type="number" id="telefonoContacto" name="telefonoContacto" class="form-control" placeholder="Teléfono del Contacto">
                            </div>
                            <div class="form-group">
                                <label for="emailContacto">Email Contacto</label>
                                <input required type="email" id="emailContacto" name="emailContacto" class="form-control" placeholder="Email del Contacto">
                            </div>
                            <div class="form-group">
                                <label for="boleta">Valor Boleta</label>
                                <input required type="number" id="boleta" name="boleta" class="form-control" placeholder="Valor de la Boleta">
                            </div>

                            <div class="form-group">
                                <label for="descripcion" class="control-label">Descripción:</label>
                                <div class="">
                                    <textarea required id="descripcion" name="descripcion" class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Imagen</label>
                                <input required type="file" id="imagen" name="imagen">
                                <p class="help-block">Sube tu imagen</p>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <input type="submit" class="btn btn-default" value="Crear">
                                    <a class="btn btn-default btn-cancel" value="Guardar" href="<?php echo url("panelcontrol") ?>">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>