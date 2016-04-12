<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-file-text-o "></i> Formulario Subcategoria</h3>
        </div>
        <div class="panel-body">
            <section class="">
                <div class="box">
                    <div id="box-panel">
                        <form action="<?php echo url("home/subCategoria/registrar") ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="subcategoria[nombre]">Subcategoria :</label>
                                <input required type="text" id="subcategoria[nombre]" name="subcategoria[nombre]" class="form-control" placeholder="Subcategoria">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Categoría :</label>
                                <div class="">
                                    <select required id="subcategoria[categoria]" name="subcategoria[categoria]">
                                        <?php foreach ($categorias as $categoria): ?>
                                            <option value="<?php echo $categoria->cat_id ?>"><?php echo $categoria->cat_nombre ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
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