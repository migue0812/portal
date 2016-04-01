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
                    <a href="" class="list-group-item menu-eventos">Sitios</a>
                    <a href="" class="list-group-item menu-eventos">Eventos</a>
                    <a href="#" class="list-group-item menu-eventos">Proximos</a>
                </div>
            </aside>
        </div>
        <div class="col-lg-8 col-xs-12 col-sm-9">
            <article id="tablaMenu">    
                <div class="table-responsive">
                    <table class="table table-striped">                                                                                 
                        <thead>
                            <tr class="success">
                                <th>Evento</th>
                                <th>Fecha</th>
                                <th>Opciones</th>
                            </tr>
                            <tr id="eventos-sitio">
                                <td>Buga Tatto</td>
                                <td>25/11/2015</td>
                                <td>
                                    <a title="Detalles" href="#" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-eye-open"></i></a>
                                    <a title="Ir" href="#" class="btn btn-xs btn-warning"><i class="icon-direction"></i></a>
                                    <a title="Completo" href="#" class="btn btn-xs btn-primary"><i class="icon-bell"></i></a>
                                    <a title="Eliminar" href="#" class="btn btn-xs btn-danger"><i class="icon-cross"></i></a>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>   
            </article>
        </div>

    </div>  

</section>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>