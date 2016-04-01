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
    <div class="col-md-10">
      <article class="articulo">    
        <a>
          <div class="back">
            <article class="slideuno " >
              <div class="slides">
                <img src="<?php echo asset("img/tres.jpg") ?>" alt="Imagen">
                <img src="<?php echo asset("img/cuatro.jpg") ?>" alt="Imagen">
                <img src="<?php echo asset("img/cinco.jpg") ?>" alt="Imagen">
              </div>
            </article>
          </div>
        </a>
        <h2 class="titulo-evento">
          <a href="#"><?php echo $evento->eve_nombre ?></a>
        </h2>
        <p><span class="articulofecha"><?php echo $evento->fecha_inicio_publicacion ?></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
        <p class="articulo-contenido text-justify">
          <?php echo ((strlen($evento->eve_descripcion) > 300) ? substr(($evento->eve_descripcion), 0, 300) . " ..." : ($evento->eve_descripcion)) ?>
        </p>
        <div class="contenedor-botones">
          <a href="" class="btn btn-primary">Ver Mas</a>
          <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
        </div>

      </article>
    </div>
<?php endforeach;?>
    <aside class="col-md-2 hidden-xs hidden-sm " >
      <h4>Categorias</h4>    
      <div class="list-group">
        <a href="#" class="list-group-item active">Religion</a>
        <a href="#" class="list-group-item">Deportes</a>
        <a href="#" class="list-group-item">Ecoturismo</a>
        <a href="#" class="list-group-item">Cicloturismo</a>
        <a href="#" class="list-group-item">Gastronomia</a>
      </div>
      <h4>Articulos Recientes</h4>
      <a href="#" class="list-group-item">
        <h4 class="list-group-heading">Buga tatto el mejor evento de arte en la ciudad de buga</h4>
        <p class="list-item-text">Participa en el evento</p>
      </a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-heading">Buga tatto el mejor evento de arte en la ciudad de buga</h4>
        <p class="list-item-text">Participa en el evento</p>
      </a>
    </aside>
  </div>
  <div class="row">
    <div class="col-md-5">
      <article class="articulo">    
        <a>
          <div class="back">
            <article class="slideuno " >
              <div class="slides">
                <img src="<?php echo asset("img/uno.jpg") ?>" alt="Imagen">
                <img src="<?php echo asset("img/tres.jpg") ?>" alt="Imagen">
                <img src="<?php echo asset("img/seis.jpg") ?>" alt="Imagen">
              </div>
            </article>
          </div>
        </a>
        <h2 class="titulo-evento">
          <a href="#">Caminata Ecologica</a>
        </h2>
        <p><span class="articulofecha">15 Octubre 2015</span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
        <p class="articulo-contenido text-justify">
          Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
          nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
          Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
          neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
          lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
          molestie odio placerat eu. Vestibulum id magna nibh. Morbi
          suscipit vestibulum malesuada. Integer dictum tortor et quam
          porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
          Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
          est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
          congue at pellentesque quis, suscipit eget est.
        </p>
        <div class="contenedor-botones">
          <a href="#" class="btn btn-primary">Ver Mas</a>
          <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
        </div>

      </article>
    </div>
    <div class="col-md-5">
      <article class="articulo">    
        <a>
          <div class="back">
            <article class="slideuno " >
              <div class="slides">
                <img src="<?php echo asset("img/tres.jpg") ?>" alt="Imagen">
                <img src="<?php echo asset("img/cuatro.jpg") ?>" alt="Imagen">
                <img src="<?php echo asset("img/cinco.jpg") ?>" alt="Imagen">
              </div>
            </article>
          </div>
        </a>
        <h2 class="titulo-evento">
          <a href="#">Visita de monumentos</a>
        </h2>
        <p><span class="articulofecha">15 Octubre 2015</span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
        <p class="articulo-contenido text-justify">
          Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
          nibh dictum eu. Nam fermentum id tellus tempus tincidunt. 
          Nulla dictum, ligula vitae feugiat rutrum, urna mauris lobortis
          neque, vitae accumsan erat erat ut nibh. Donec faucibus porta 
          lectus non imperdiet.<br> Mauris feugiat diam sapien, consequat 
          molestie odio placerat eu. Vestibulum id magna nibh. Morbi
          suscipit vestibulum malesuada. Integer dictum tortor et quam
          porttitor rhoncus. Integer at mi laoreet dolor rhoncus porttitor.
          Etiam laoreet, tellus non maximus tempor, ipsum tellus condimentum 
          est, sit amet auctor sapien lorem ut sapien. Cras nibh felis, 
          congue at pellentesque quis, suscipit eget est.
        </p>
        <div class="contenedor-botones">
          <a href="#" class="btn btn-primary">Ver Mas</a>
          <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
        </div>
      </article>
    </div>
  </div>
  </section>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>