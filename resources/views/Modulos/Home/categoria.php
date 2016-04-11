<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<section class="container main">
    <div class="row ">
        <div class="miga-de-pan col-md-12">
            <ol class="breadcrumb">
                <li class="inicio"><a href="#"></a>Inicio</li>
                <li><a href="#" id="til">Categorias</a></li>
                <li class="active">Todas</li>
            </ol>
        </div>
    </div>

    <!--Termina Miga De Pan-->

    <div class="row">
        <?php
        $count = 0;
        foreach ($categorias as $categoria):
//            if ($count++ == 6)
//                break;
            ?>

            <div class="col-md-6" id="elementoA">
                <article class="articulo">    
                    <div class="back">
                        <div class="slides2">
                            <img class="imgarticle" src="<?php echo asset($categoria->img_ruta) ?>" alt="Imagen">
                        </div>
                    </div>
                    <h2 class="titulo-evento">
                        <a href="#" id="til"><?php echo $categoria->cat_nombre ?></a>
                    </h2>
                    <p><span class="articulofecha" id="do"><?php echo $categoria->cat_created_at ?></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
                    <p class="articulo-contenido text-justify">
                        <i><?php echo ($categoria->cat_descripcion) ?></i>
                    </p>
                    <div class="contenedor-botones">
                        <a href="" class="btn icon-circle-with-plus"> Ver Mas</a>
                    </div>

                </article>
            </div>
<?php endforeach; ?>
    </div>
</section>

<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>