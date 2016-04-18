<article id="tablaMenu">    
    <div class="table-responsive">
        <table class="table table-striped">                                                                                 
            <thead>
                <tr class="success">
                    <th>Sitio</th>
                    <th>Visitado</th>
                    <th>Opciones</th>
                </tr>
                <?php
                            $count = 1;
                            foreach ($sitios as $sitio):
                                ?>
                <tr>
                    <td><?php echo $sitio->sit_nombre ?></td>
                    <td><a><?php echo $sitio->iti_visitado ?></a></td>
                    <td>
                        <a title="Ver Sitio" href="<?php echo url("home/sitio/detalle/" . $sitio->sit_id) ?>" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-eye-open"></i></a>
                        <?php if ($sitio->iti_visitado === 'Si'): ?>
                        <a title="No Visitado" href="<?php echo url("itinerario/sitionovisitado/" . $sitio->sit_id) ?>" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-plane"></i></a>
                        <?php else: ?>
                        <a title="Visitado" href="<?php echo url("itinerario/sitiovisitado/" . $sitio->sit_id) ?>" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-plane"></i></a>
                        <?php endif ?>
                        <a title="Eliminar" href="<?php echo url("itinerario/sitioeliminar/" . $sitio->sit_id) ?>" class="btn btn-xs btn-danger"><i class="icon-cross"></i></a>
                    </td>
                </tr>
                 <?php
                            endforeach
                            ?>
            </thead>
        </table>
    </div>   
</article>