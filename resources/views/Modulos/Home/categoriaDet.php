<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<section class="container main">
  <div class="row ">
    <div class="miga-de-pan col-md-10">
      <ol class="breadcrumb">
        <li class="inicio"><a href="#"></a>Inicio</li>
        <li><a href="#" id="til">Categorias</a></li>
        <li class="active">Todas</li>
      </ol>
    </div>
  </div>

  <!--Termina Miga De Pan-->
<div class="row">
    <div class="col-md-10">
      <article class="articulo">    
        <a>
          <div class="back">
            <article class="slideuno " >
              <div class="slides">
                <img src="<?php echo asset("img/dos.jpg") ?>" alt="Imagen">
                <img src="<?php echo asset("img/seis.jpg") ?>" alt="Imagen">
                <img src="<?php echo asset("img/tres.jpg") ?>" alt="Imagen">
              </div>
          </div>
        </a>
        <h2 class="titulo-evento">
          <a href="#">Ecoturismo En Buga</a>
        </h2>
        <p><span class="articulofecha"></span> por <span class="articulo-autor"><a href="#">Admin</a></span></p>
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
      </article>
    </div>

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

</section>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>