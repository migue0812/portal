<?php include ("/../../Templates/Frontend/head.php") ?>


<section class="main container">

                <div class="box">
                    <div class="box-top">Editar Categoría</div>
                    <div id="box-panel">
                        <form action="<?php echo url("home/categoria/editar") ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nombre">Categoría</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre categoría" value="<?php echo $categorias->cat_nombre ?>">
                            </div>
                              <div class="form-group">
                                <label for="descripcion" class="control-label">Descripcion:</label>
                                <div class="">
                                    <textarea id="descripcion" name="descripcion" class="form-control" rows="5" id="comment"><?php echo $categorias->cat_descripcion ?></textarea>
                                </div>
                            </div> 
                            <input type="hidden" value="<?php echo $categorias->cat_id ?>" name="id" id="id">
                            <div class="form-group">
                                <label for="imagen">Imagen</label>
                                <input type="file" id="imagen" name="imagen" value="<?php echo $categorias->img_ruta ?>">
                                <p class="help-block"><?php echo $categorias->img_ruta ?></p>
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
            </div> 
</section>
<?php include ("/../../Templates/Frontend/foot.php") ?>
