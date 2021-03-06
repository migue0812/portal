<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<section class="main container">
  <div class="row">
    <div class="miga-de-pan col-md-10">
      <ol class="breadcrumb">
        <li class="inicio"><a href="#"></a>Inicio</li>
        <li><a href="#">Resultado de busqueda</a></li>    
      </ol>
    </div>
  </div>

  <!--Termina Miga De Pan-->
  <div class="row">
      <?php if (Session::has("sinResultados")):?>
    <div class="alert alert-warning alert-dismissible center-block" role="alert"><?php echo Session::get("sinResultados") ?></div>
                <?php endif ?>
      <?php foreach ($resultados as $resultado): ?>
    <div class="col-md-4">
      <article class="articulo">    
        <a>
          <img class="imgarticle" src="<?php echo asset("$resultado->img_ruta") ?>" alt="Imagen">
        </a>
        <h2 class="titulo-evento">
          <a href="#"><?php echo ((strlen($resultado->sit_nombre) > 15) ? substr(($resultado->sit_nombre), 0, 15) . " ..." : ($resultado->sit_nombre)) ?></a>
        </h2>
        <p><span class="articulofecha"><?php echo $resultado->sit_created_at ?></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
        <p class="articulo-contenido text-justify">
          <?php echo ((strlen($resultado->sit_descripcion) > 80) ? substr(($resultado->sit_descripcion), 0, 60) . " ..." : ($resultado->sit_descripcion)) ?>
        </p>
        <div class="contenedor-botones">
          <a href="<?php echo url("home/sitio/detalle/" . $resultado->sit_id) ?>" class="btn btn-primary">Ver Mas</a>
          <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
        </div>

      </article>
        
    </div>
    <?php endforeach ?>
  </div>
</section>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>
