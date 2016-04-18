<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<section class="main container">
  <div class="row ">
    <div class="miga-de-pan col-md-10">
      <ol class="breadcrumb">
        <li class="inicio"><a href="#"></a>Inicio</li>
        <li><a href="#">Eventos</a></li>        
      </ol>
    </div>
  </div>
  <!--Termina Miga De Pan-->
  <?php
            $count = 0;
            foreach ($eventos as $evento):
              if ($count++ == 1)
                break;
              ?>
  <div class="row">
    <div class="col-md-12">
      <article class="articulo">    
        <a>
          <div class="back">
            <article class="slideuno " >
              <div class="slides">
                <img src="<?php echo asset("$evento->img_ruta") ?>" alt="Imagen">
                
              </div>
            </article>
          </div>
        </a>
        <h2 class="titulo-evento">
          <a href="#"><?php echo $evento->eve_nombre ?></a>
        </h2>
          <p><span class="articulofecha"><?php echo $evento->eve_fecha_hora ?></span></p>
        <p class="articulo-contenido text-justify">
          <?php echo ((strlen($evento->eve_descripcion) > 300) ? substr(($evento->eve_descripcion), 0, 300) . " ..." : ($evento->eve_descripcion)) ?>
        </p>
        <div class="contenedor-botones">
          <a href="<?php echo url("home/evento/detalle/" . $evento->eve_id) ?>" class="btn btn-primary">Ver Mas</a>
          <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
        </div>

      </article>
    </div>
<?php endforeach;?>
   
  </div>
  <div class="row">
      
      <?php foreach ($eventos2 as $evento2): ?>
    <div class="col-md-6">
      <article class="articulo">    
        <a>
          <div class="back">
            <article class="slideuno " >
              <div class="slides">
                <img src="<?php echo asset("$evento2->img_ruta") ?>" alt="Imagen">
              
              </div>
            </article>
          </div>
        </a>
        <h2 class="titulo-evento">
          <a href="#"><?php echo $evento2->eve_nombre ?></a>
        </h2>
        <p><span class="articulofecha"><?php echo $evento2->eve_fecha_hora ?></span></p>
        <p class="articulo-contenido text-justify">
          <?php echo ((strlen($evento2->eve_descripcion) > 300) ? substr(($evento2->eve_descripcion), 0, 300) . " ..." : ($evento2->eve_descripcion)) ?>
        </p>
        <div class="contenedor-botones">
          <a href="<?php echo url("home/evento/detalle/" . $evento2->eve_id) ?>" class="btn btn-primary">Ver Mas</a>
          <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
        </div>
      </article>
    </div>
      <?php endforeach;?>

  </div>
  </section>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>