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
      <?php foreach ($resultados as $resultado): ?>
    <div class="col-md-4">
      <article class="articulo">    
        <a>
          <img class="imgarticle" src="<?php echo asset("img/uno.jpg") ?>" alt="Imagen">
        </a>
        <h2 class="titulo-evento">
          <a href="#"><?php echo ($resultado->sit_nombre) ?></a>
        </h2>
        <p><span class="articulofecha">15 Octubre 2015</span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
        <p class="articulo-contenido text-justify">
          Etiam eu eros justo. Mauris semper rutrum felis, ac aliquam 
          nibh dictum eu.
        </p>
        <div class="contenedor-botones">
          <a href="#" class="btn btn-primary">Ver Mas</a>
          <a href="#" class="btn btn-success">Comentarios<span class="badge">33</span></a>
        </div>
        </article>
        </div>
<?php endforeach ?>
      
    
    
  
</section>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>
