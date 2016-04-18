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
                                <h1 class="section">
                                    <?php echo $eveDetalle->eve_nombre ?></h1>
                                <p></p>
                                <div class="sitCont">
                                    <p class="contenido-p">
                                        <?php echo $eveDetalle->eve_descripcion ?>
                                    </p>
                                    <p></p>
                                </div>
                                <div class="map">
                            </div>

                                <section class="groups">
                                    <ul>
                                        <li>
                                            <a href="#dire" data-toggle="collapse">Dirección:</a>
                                            <div id="dire" class="">
                                                <?php echo $eveDetalle->eve_direccion ?>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#fecha" data-toggle="collapse">Fecha y Hora del Evento:</a>
                                            <div id="fecha" class="">
                                                <?php echo $eveDetalle->eve_fecha_hora ?>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#valor" data-toggle="collapse">Valor: </a>
                                            <div id="valor" class="">
                                                $<?php echo $eveDetalle->eve_valor_boleta ?>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#cnombre" data-toggle="collapse">Nombre del Contacto:</a>
                                            <div id="cnombre" class="">
                                                <?php echo $eveDetalle->eve_nombre_contacto ?>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#ctel" data-toggle="collapse">Teléfono del Contacto:</a>
                                            <div id="ctel" class="">
                                                <?php echo $eveDetalle->eve_telefono_contacto ?>
                                            </div>
                                        </li> 
                                        <li>
                                            <a href="#cemail" data-toggle="collapse">Email del Contacto:</a>
                                            <div id="cemail" class="">
                                                <?php echo $eveDetalle->eve_correo_contacto ?>
                                            </div>
                                        </li>
                                    </ul>
                                </section>

                            </div>

                    </header>
                </div>

            </main>
        </div>
  
            <div class="hidden-xs hidden-sm col-md-6 col-lg-6">
                <div class="back">
                    <article class="slideuno " >
                        <div class="slides">
                            <img src="<?php echo asset("$eveDetalle->img_ruta") ?>" alt="Imagen">
                            <img src="<?php echo asset("$eveDetalle->img_ruta") ?>" alt="Imagen">
                            <img src="<?php echo asset("$eveDetalle->img_ruta") ?>" alt="Imagen">
                        </div>
                </div>
            </div>
                
        <?php if (Session::has("usuarioLogueado")): ?>
            <div class="opcionesSit col-md-6 col-lg-6">
                <div class="city-social">
                    <a class="icon-add-to-list btn " href="<?php echo url("itinerario/evento/" . $eveDetalle->sit_id) ?>"> Itinerario</a>
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
                            <h3><span>Mas Eventos</span></h3>
                        </header>
                </main>
                <div class="container">
                    <div class="row contenido">
                        <?php
                       
                        foreach ($eventos as $evento):
//                            
                            ?>
                            <figure class="col-xs-12 col-sm-6 col-md-4">
                                <div class="contenedor-img fx">
                                    <img class="img-contenido img-responsive" src="<?php echo asset($evento->img_ruta) ?>" alt="Imagen" />
                                    <div class="mascara">
                                        <h2><?php echo ($evento->eve_nombre) ?></h2>
                                        <p><?php echo ((strlen($evento->eve_descripcion) > 100) ? substr(($evento->eve_descripcion), 0, 100) . " ..." : ($evento->eve_descripcion)) ?></p>
                                        <a class="link" href="<?php echo url("home/evento/detalle/" . $evento->eve_id) ?>">Leer mas</a>
                                    </div>
                                </div>
                            </figure>
                        <?php endforeach; ?>
                    </div>
                </div>
                
        </div>
</section>
<?php
//endforeach
?>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>