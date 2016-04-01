<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Formulario Sitio</h3>
        </div>
        <div class="panel-body">
            <section class="main container">
                <div class="box">
                    <div id="box-panel">
                        <form action="<?php echo url("home/sitio/registrar") ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="sitio[nombre]">Sitio</label>
                                <input required type="text" id="sitio[nombre]" name="sitio[nombre]" class="form-control" placeholder="Nombre sitio">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Categoría:</label>
                                <div class="">
                                    <select required id="sitio[categoria]" name="sitio[categoria]">
                                        <option value="1">Cultura y Tradición</option>
                                        <option value="2">Histórico</option>
                                        <option value="3">Ecoturístico</option>
                                        <option value="4">Religioso</option>
                                        <option value="5">Entretenimiento</option>
                                        <option value="6">Deportes</option></select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sitio[direccion]">Direccion</label>
                                <input required type="text" id="sitio[direccion]" name="sitio[direccion]" class="form-control" placeholder="Direccion">
                            </div>
                            <div class="form-group">
                                <label for="sitio[telefono]">Telefono</label>
                                <input required type="number" id="sitio[telefono]" name="sitio[telefono]" class="form-control" placeholder="Telefono">
                            </div>

                            <div class="form-group">
                                <label for="sitio[descripcion]" class="control-label">Descripcion:</label>
                                <div class="">
                                    <textarea required id="sitio[descripcion]" name="sitio[descripcion]" class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Imagen</label>
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