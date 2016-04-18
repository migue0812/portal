
<section class="main container">
    <div class="box">
        <div class="box-top">Editar Sitio</div>
        <div id="box-panel">
            <form action="<?php echo url("home/sitio/editar") ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nombre">Sitio</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre sitio" value="<?php echo $sitios->sit_nombre ?>">
                </div>
                <div class="form-group">
                    <label class="control-label">Categoría:</label>
                    <div class="">
                        <select id="categoria" name="categoria">
                            <option value="<?php echo $sitios->cat_id ?>"><?php echo $sitios->cat_nombre ?></option>
                                        <?php foreach ($categorias as $categoria): ?>
                                            <option value="<?php echo $categoria->cat_id ?>"><?php echo $categoria->cat_nombre ?></option>
                                        <?php endforeach ?></select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" placeholder="Dirección" value="<?php echo $sitios->sit_direccion ?>">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="number" id="telefono" name="telefono" class="form-control" placeholder="Teléfono" value="<?php echo $sitios->sit_telefono ?>">
                </div>

                <div class="form-group">
                    <label for="descripcion" class="control-label">Descripción:</label>
                    <div class="">
                        <textarea id="descripcion" name="descripcion" class="form-control" rows="5" id="comment"><?php echo $sitios->sit_descripcion ?></textarea>
                    </div>
                </div>
                <input type="hidden" value="<?php echo $sitios->sit_id ?>" name="id" id="id">
                <div class="form-group">
                    <label for="">Imagen</label>
                    <input type="file" id="imagen" name="imagen">
                    <p class="help-block"><?php echo $sitios->img_ruta ?></p>
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
