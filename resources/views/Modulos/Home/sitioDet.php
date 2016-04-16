<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<section class="container container-fluid main">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <main>
                <div>
                    <header class="explore-header col-lg-12">
                        <div class="column description">
                            <div class="hgroup">
                                <h1 class="section"><?php
                                    //$x = 0;
                                    //foreach ($sitioDet as $sitDetalle):
                                    ?>
                                    <?php echo $sitDetalle->sit_nombre ?></h1>
                                <p></p>
                                <div class="sitCont">
                                    <p class="contenido-p">
                                        <?php echo $sitDetalle->sit_descripcion ?>
                                    </p>
                                    <p></p>
                                </div>
                                <div class="map">


                                </div>

                                <div class="stars">
                                    <div class="ec-stars-wrapper col-lg-4">
                                        <spam  class="tittlePunt">Atención :</spam>
                                        <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                                        <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                                        <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                                        <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                                        <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                                    </div>
                                    <noscript>Necesitas tener habilitado javascript para poder votar</noscript>
                                    <div class="ec-stars-wrapper col-lg-4">
                                        <spam  class="tittlePunt">Precio :</spam>
                                        <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                                        <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                                        <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                                        <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                                        <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                                    </div>
                                    <noscript>Necesitas tener habilitado javascript para poder votar</noscript>
                                    <div class="ec-stars-wrapper col-lg-4">
                                        <spam  class="tittlePunt">Calidad :</spam>
                                        <a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
                                        <a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
                                        <a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
                                        <a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
                                        <a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>
                                    </div>
                                    <noscript>Necesitas tener habilitado javascript para poder votar</noscript>
                                </div>


                                <section class="groups">
                                    <ul>
                                        <li>
                                            <a href="#dire" data-toggle="collapse">Direccion:</a>
                                            <div id="dire" class="collapse">
                                                <?php echo $sitDetalle->sit_direccion ?>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#tele" data-toggle="collapse">Teléfono:</a>
                                            <div id="tele" class="collapse">
                                                <?php echo $sitDetalle->sit_telefono ?>
                                            </div>
                                        </li>
                                    </ul>
                                </section>

                            </div>

                    </header>
                </div>

            </main>
        </div>
        <?php
        $count = 0;
        foreach ($sitios as $sitio):
//                            if ($count++ == 6)
//                                break;
            ?>
            <div class="hidden-xs hidden-sm col-md-6 col-lg-6">
                <div class="back">
                    <article class="slideuno " >
                        <div class="slides">
                            <img src="<?php echo asset("$sitio->img_ruta") ?>" alt="Imagen">
                            <img src="<?php echo asset("$sitio->img_ruta") ?>" alt="Imagen">
                            <img src="<?php echo asset("$sitio->img_ruta") ?>" alt="Imagen">
                        </div>
                </div>
            </div>
        <?php endforeach; ?>
        <?php if (Session::has("usuarioLogueado")): ?>
            <div class="opcionesSit col-md-6 col-lg-6">
                <div class="city-social">
                    <a class="icon-add-to-list btn " href="<?php echo url("itinerario/sitio/" . $sitDetalle->sit_id) ?>"> Itinerario</a>
                    <script
                        type="text/javascript"
                        async defer
                        src="//assets.pinterest.com/js/pinit.js"
                    ></script>
                    <a data-pin-do="buttonPin" href="https://www.pinterest.com/pin/create/button/?url=http://www.foodiecrush.com/2014/03/filet-mignon-with-porcini-mushroom-compound-butter/&media=https://s-media-cache-ak0.pinimg.com/736x/17/34/8e/17348e163a3212c06e61c41c4b22b87a.jpg&description=So%20delicious!" data-pin-height="28"></a>
                </div>
            <?php endif ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="sitio-contenido">
                <main class="container"role="main">
                    <article class="">
                        <header class="sitio-head">
                            <h3><span>Mas Sitios</span></h3>
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
                <?php //if (isset($_SESSION['user']['usuario']) === true): ?>
                <?php //include_once $fsConfig->getPath() . 'view/parcial/comment.php' ?>
                <?php //endif ?>
        </div>
</section>
<?php
//endforeach
?>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>