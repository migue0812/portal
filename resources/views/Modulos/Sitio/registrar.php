<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-file-text-o "></i> Formulario Sitio</h3>
        </div>
        <div class="panel-body">
            <section class="">
                <div class="box">
                    <div id="box-panel">
                        <form action="<?php echo url("home/sitio/registrar") ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Sitio</label>
                                <input required type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre sitio">
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
                                <label class="control-label">SubCategoría:</label>
                                <div class="">
                                    <select required id="subcategoria" name="subcategoria">
                                        <?php foreach ($subcategorias as $subcategoria): ?>
                                            <option value="<?php echo $subcategoria->subcat_id ?>"><?php echo $subcategoria->subcat_nombre ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="direccion">Dirección</label>
                                <input required type="text" id="direccion" name="direccion" class="form-control" placeholder="Direccion">
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input required type="number" id="telefono" name="telefono" class="form-control" placeholder="Telefono">
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
                                    <a class="btn btn-default btn-cancel" value="Guardar" href="<?php echo url("home/index") ?>">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>