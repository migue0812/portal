<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<section class="container container-fluid main">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="sitio-header">
                <main class="container" role="main">
                    <article class="articulo">                        
                        <div class="">
                            <img class="imgarticle img-responsive" src="<?php echo asset("img/map-explore.jpg") ?>" alt="Imagen">
                        </div>
                </main>
            </section>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="sitio-contenido">
                <main class="container"role="main">
                    <article class="">                        
                        <header class="sitio-head">
                            <h3><span>Sitios</span></h3>
                        </header>
                </main>
                <div class="container">
                    <div class="row contenido">
                        <?php
                        $count = 0;
                        foreach ($sitios as $sitio):
//                            if ($count++ == 6)
//                                break;
                            ?>
                            <figure class="col-xs-12 col-sm-6 col-md-4">
                                <div class="contenedor-img fx">  
                                    <img class="img-contenido img-responsive" src="<?php echo asset($sitio->img_ruta) ?>" alt="Imagen" />  
                                    <div class="mascara">
                                        <h2><?php echo ($sitio->sit_nombre) ?></h2>
                                        <p><?php echo ((strlen($sitio->sit_descripcion) > 100) ? substr(($sitio->sit_descripcion), 0, 100) . " ..." : ($sitio->sit_descripcion)) ?></p>
                                        <a class="link" href="<?php echo url("home/sitio/detalle/" . $sitio->sit_id) ?>">Leer mas</a>
                                    </div>
                                </div>
                            </figure>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>