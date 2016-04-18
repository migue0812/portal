<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<section class="main container">
    <div class="row ">
        <div class="miga-de-pan col-md-10">
            <ol class="breadcrumb">
                <li class="inicio"><a href="#"></a>Inicio</li>
                <li><a href="#">Tiamat</a></li>
                <li class="active">Itinerario</li>
            </ol>
        </div>
    </div>
    
    <?php if (Session::has("sitio")):?>
    <div class="alert alert-success alert-dismissible center-block" role="alert"><?php echo Session::get("sitio") ?></div>
                <?php endif ?>
    <?php if (Session::has("sitioExistente")):?>
    <div class="alert alert-danger alert-dismissible center-block" role="alert"><?php echo Session::get("sitioExistente") ?></div>
                <?php endif ?>
     <?php if (Session::has("sitioVisitado")):?>
    <div class="alert alert-info alert-dismissible center-block" role="alert"><?php echo Session::get("sitioVisitado") ?></div>
                <?php endif ?>
     <?php if (Session::has("sitioNoVisitado")):?>
    <div class="alert alert-warning alert-dismissible center-block" role="alert"><?php echo Session::get("sitioNoVisitado") ?></div>
                <?php endif ?>
    <?php if (Session::has("sitioEliminado")):?>
    <div class="alert alert-danger alert-dismissible center-block" role="alert"><?php echo Session::get("sitioEliminado") ?></div>
                <?php endif ?>
    
    <!--Termina Miga De Pan-->
    <div class="row">
        <div class="itineraio col-lg-2 col-xs-12 col-sm-3">
            <aside class="" >   
                <div class="list-group">
                    <a href="<?php echo url("itinerario/sitios")?>" class="list-group-item menu-eventos">Sitios</a>
                    <a href="<?php echo url("itinerario/eventos")?>" class="list-group-item menu-eventos">Eventos</a>
                    <a href="#" class="list-group-item menu-eventos">Proximos</a>
                </div>
            </aside>
        </div>
        <div id="tablaMenu" class="col-lg-8 col-xs-12 col-sm-9">   
        </div>
    </div>  

</section>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>