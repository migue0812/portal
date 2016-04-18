<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-file-text-o "></i> Formulario Subcategoria</h3>
        </div>
        <div class="panel-body">
            <section class="">
                <div class="box">
                    <div id="box-panel">
                        <form action="<?php echo url("home/subcategoria/editar") ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Subcategoria :</label>
                                <input required type="text" id="nombre" name="nombre" class="form-control" placeholder="Subcategoria" value="<?php echo $subcategorias->subcat_nombre ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Categoría :</label>
                                <div class="">
                                    <select required id="categoria" name="categoria">
                                        <option value="<?php echo $subcategorias->cat_id ?>"><?php echo $subcategorias->cat_nombre ?></option>
                                        <?php foreach ($categorias as $categoria): ?>
                                            <option value="<?php echo $categoria->cat_id ?>"><?php echo $categoria->cat_nombre ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo $subcategorias->subcat_id ?>" name="id" id="id">
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