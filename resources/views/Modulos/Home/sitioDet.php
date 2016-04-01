<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>

<section class="container container-fluid main">
  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
      <main>
        <div>
          <header class="explore-header">
            <div class="column description">
              <div class="hgroup">                              
                <h1 class="section">Sitios</h1>
                <div class="title-breadcrumbs">
                  <p class="bc-title">
                    <?php
                    //$x = 0;
                   //foreach ($sitioDet as $sitDetalle):
                      ?>
                      <?php echo $sitDetalle->sit_nombre ?>
                    </p>
                  </div>
                </div>
                <p></p>
                <p class="contenido-p">
                  <?php echo $sitDetalle->sit_descripcion ?>
                </p>
                <p></p>
                <?php if (Session::has("usuarioLogueado")):?>
                  <div class="city-social">
                    <a class="icon-add-to-list btn " href=""> Itinerario</a>
                    <a class="icon-share-alternitive btn "> Compartir</a>
                    <a class="icon-add-to-list btn icon-thumbs-up "></a>
                  </div>
                <?php endif ?>
                <section class="groups">
                  <ul>
                    <li>
                      <a href="/explore/shopping/antiques">
                        <span class="Apple-style-span">
                          Dirección: <?php echo $sitDetalle->sit_direccion ?>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="/explore/shopping/antiques">
                        <span class="Apple-style-span">
                          Teléfono: <?php echo $sitDetalle->sit_telefono ?>
                        </span>
                      </a>
                    </li>
                    <li>
                      <a href="/explore/shopping/antiques">
                        <span class="Apple-style-span">
                          Correo
                        </span>
                      </a>
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
              <img src="<?php echo asset("img/uno.jpg") ?>" alt="Imagen">
              <img src="<?php echo asset("img/dos.jpg") ?>" alt="Imagen">
              <img src="<?php echo asset("img/tres.jpg") ?>" alt="Imagen">
            </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <section class="sitio-contenido">

        </section>
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