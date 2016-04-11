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