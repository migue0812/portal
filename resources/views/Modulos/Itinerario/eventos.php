<article id="tablaMenu">    
    <div class="table-responsive">
        <table class="table table-striped">                                                                                 
            <thead>
                <tr class="success">
                    <th>Evento</th>
                    <th>Fecha</th>
                    <th>Opciones</th>
                </tr>
                <?php
                            $count = 1;
                            foreach ($eventos as $evento):
                                ?>
                <tr>
                    <td><?php echo $evento->eve_nombre ?></td>
                    <td><a><?php echo $evento->eve_fecha_hora ?></a></td>
                    <td>
                        <a title="Ver Evento" href="<?php echo url("home/evento/detalle/" . $evento->eve_id) ?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a title="Eliminar" href="<?php echo url("itinerario/eventoeliminar/" . $evento->eve_id) ?>" class="btn btn-xs btn-danger"><i class="icon-cross"></i></a>
                    </td>
                </tr>
                 <?php
                            endforeach
                            ?>
            </thead>
        </table>
    </div>   
</article>