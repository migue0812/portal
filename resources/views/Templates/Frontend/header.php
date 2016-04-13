
<header>
  <nav class="navmain">
    <div class="jumbotron jumbotron-header">
      <div class="container">
        <div class="nav-header">
          <h1><a href="" title="BugaTurismo" rel="home">TU BUGA</a></h1>         
          <p class="subtitulo">Ciudad Para Todos</p>
        </div>   
      </div>
    </div>
  </nav>
  <nav class="navbar navbar-default ">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <div class="collapse navbar-collapse navSub" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo url("home/index") ?>">Inicio <span class="sr-only">(current)</span></a></li>
          <li><a href="<?php echo url("home/sitio") ?>">Sitios</a></li>
          <li><a href="<?php echo url("home/evento") ?>">Eventos</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo url("home/categoria") ?>">Todas</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Deportes</a></li>
              <li><a href="#">Ecoturismo</a></li>
              <li><a href="#">Gastronomia</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <?php if ((Session::has("usuarioLogueado") !== true) && (Session::has("usuarioAdmin") !== true)):?>
            <li><a href="<?php echo url("seguridad/login") ?>">Ingresar</a></li>
            <li><a href="<?php echo url("seguridad/registro") ?>">Registrar</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php elseif (Session::has("usuarioLogueado")): ?>
            <li><a href="#"><img src="<?php echo asset("img/avatar.png") ?>" /><?php echo ' ' . Session::get("usuarioLogueado") ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
              <ul class="dropdown-menu"> 
                <li><a href="">Mi itinerario</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="">Configuración</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo url("seguridad/logout") ?>">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <?php elseif (Session::has("usuarioAdmin")): ?>
            <li><a href="#"><img src="<?php echo asset("img/avatar.png") ?>" /><?php echo ' ' . Session::get("usuarioAdmin") ?></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../panelcontrol">Panel de control</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="">Configuración</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="<?php echo url("seguridad/logout") ?>">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
       <?php endif ?>
          <form action="<?php echo url("home/busqueda/buscar") ?>" method="post" class="navbar-form navbar-right" role="search">
          <div class="form-group">
              <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">
            <span class="icon-magnifying-glass"></span>
          </button>
        </form>
      </div>
    </div>
  </nav>
</header>
