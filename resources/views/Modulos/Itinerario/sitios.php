<article id="tablaMenu">    
    <div class="table-responsive">
        <table class="table table-striped">                                                                                 
            <thead>
                <tr class="success">
                    <th>Sitio</th>
                    <th>Ubicación</th>
                    <th>Opciones</th>
                </tr>
                <?php
                            $count = 1;
                            foreach ($sitios as $sitio):
                                ?>
                <tr>
                    <td><?php echo $sitio->sit_nombre ?></td>
                    <td><a>Ir</a></td>
                    <td>
                        <a title="Detalles" href="#" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a title="Ir" href="#" class="btn btn-xs btn-warning"><i class="icon-direction"></i></a>
                        <a title="Completo" href="#" class="btn btn-xs btn-primary"><i class="icon-bell"></i></a>
                        <a title="Eliminar" href="#" class="btn btn-xs btn-danger"><i class="icon-cross"></i></a>
                    </td>
                </tr>
                 <?php
                            endforeach
                            ?>
            </thead>
        </table>
    </div>   
</article>