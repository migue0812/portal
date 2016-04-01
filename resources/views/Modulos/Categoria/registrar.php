
<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Formulario Categoria</h3>
        </div>
        <div class="panel-body">
            <section>
                <div>
                    <div id="box-panel">
                        <form action="<?php echo url("home/categoria/registrar") ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="categoria[nombre]">Categoría</label>
                                <input required type="text" id="categoria[nombre]" name="categoria[nombre]" class="form-control" placeholder="Nombre categoría">
                            </div>
                            <div class="form-group">
                                <label for="categoria[descripcion]" class="control-label">Descripcion:</label>
                                <div class="">
                                    <textarea required id="categoria[descripcion]" name="categoria[descripcion]" class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>                          
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input required type="file" id="imagen" name="imagen">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
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
