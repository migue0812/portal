
<section class="main container">
    <div class="box">
        <div class="box-top">Editar Sitio</div>
        <div id="box-panel">
            <form action="<?php echo url("home/sitio/editar") ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="sitio[nombre]">Sitio</label>
                    <input type="text" id="sitio[nombre]" name="sitio[nombre]" class="form-control" placeholder="Nombre sitio" value="<?php echo $sitios->sit_nombre ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Categoría:</label>
                    <div class="">
                        <select id="sitio[categoria]" name="sitio[categoria]">
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
                    <input type="text" id="sitio[direccion]" name="sitio[direccion]" class="form-control" placeholder="Direccion" value="<?php echo $sitios->sit_direccion ?>">
                </div>
                <div class="form-group">
                    <label for="sitio[telefono]">Telefono</label>
                    <input type="number" id="sitio[telefono]" name="sitio[telefono]" class="form-control" placeholder="Telefono" value="<?php echo $sitios->sit_telefono ?>">
                </div>

                <div class="form-group">
                    <label for="sitio[descripcion]" class="control-label">Descripcion:</label>
                    <div class="">
                        <textarea id="sitio[descripcion]" name="sitio[descripcion]" class="form-control" rows="5" id="comment"><?php echo $sitios->sit_descripcion ?></textarea>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $sitios->sit_id ?>" name="sitio[id]" id="sitio[id]">
                <div class="form-group">
                    <label for="">Imagen</label>
                    <input type="file" id="imagen" name="imagen">
                    <p class="help-block"><?php echo $sitios->img_ruta ?></p>
                </div>

                <div class="form-group">
                    <div class="">
                        <input type="submit" class="btn btn-default" value="Editar">
                        <a class="btn btn-default btn-cancel" value="Guardar" href="<?php echo url("home/index") ?>">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
