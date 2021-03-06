<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Formulario Sitio</h3>
        </div>
        <div class="panel-body">
            <br>
            <div class="">
                <b>Más visitados</b>  <a class="btn btn-success" href="<?php echo url("reporte/masvisitados") ?>">Reporte</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre Sitio</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($sitios as $sitio):
                                ?>
                                <tr>
                                    <td><?php echo $count++ ?></td>
                                    <td><?php echo $sitio->sit_nombre ?></td>
                                    <td><?php echo $sitio->est_nombre ?></td>
                                    <td><a title="Ver" href="<?php echo url("home/sitio/detalle/" . $sitio->sit_id) ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a> 
                                        <a title="Editar" href="<?php echo url("home/sitio/editar/" . $sitio->sit_id) ?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> 
                                        <?php if ($sitio->est_id===1): ?>
                                        <a title="Inhabilitar" href="<?php echo url("home/sitio/inhabilitar/" . $sitio->sit_id) ?>" class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-remove"></i></a></td>
                               <?php else:?>
                                        <a title="Habilitar" href="<?php echo url("home/sitio/habilitar/" . $sitio->sit_id) ?>" class="btn btn-success btn-sm"> <i class="glyphicon glyphicon glyphicon-ok"></i></a>
                                    <?php endif ?>
                                </tr>
                                <?php
                            endforeach
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" style="text-align: center">Sitios: <?php echo $count - 1 ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div></div>
        </div> 
    </div>
</div>