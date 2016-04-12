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
    <div class="col-md-12">
      <article class="articulo">    
        <a>
          <div class="back">
            <article class="slideuno " >
              <div class="slides">
                <img src="<?php echo asset("$catDetalle->img_ruta") ?>" alt="Imagen">
               </div>
          </div>
        </a>
        <h2 class="titulo-evento">
          <a href="#"><?php echo $catDetalle->cat_nombre ?></a>
        </h2>
        <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
        <p class="articulo-contenido text-justify">
          <?php echo $catDetalle->cat_descripcion ?>
        </p>      
      </article>
    </div>
  </div>
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
</section>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>