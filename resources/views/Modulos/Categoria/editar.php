<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<section class="main container">

                <div class="box">
                    <div class="box-top">Editar Categoría</div>
                    <div id="box-panel">
                        <form action="<?php echo url("home/categoria/editar") ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="categoria[nombre]">Categoría</label>
                                <input type="text" id="categoria[nombre]" name="categoria[nombre]" class="form-control" placeholder="Nombre categoría" value="<?php echo $categorias->cat_nombre ?>">
                            </div>
                              <div class="form-group">
                                <label for="categoria[descripcion]" class="control-label">Descripcion:</label>
                                <div class="">
                                    <textarea id="categoria[descripcion]" name="categoria[descripcion]" class="form-control" rows="5" id="comment"><?php echo $categorias->cat_descripcion ?></textarea>
                                </div>
                            </div> 
                            <input type="hidden" value="<?php echo $categorias->cat_id ?>" name="categoria[id]" id="categoria[id]">
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input type="file" id="imagen" name="imagen" value="<?php echo $categorias->img_ruta ?>">
                                <p class="help-block"><?php echo $categorias->img_ruta ?></p>
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
            </div> 
</section>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>