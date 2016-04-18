<div class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Formulario Evento</h3>
        </div>
        <div class="panel-body">
            <br>
            <div class="">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre Evento</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($eventos as $evento):
                                ?>
                                <tr>
                                    <td><?php echo $count++ ?></td>
                                    <td><?php echo $evento->eve_nombre ?></td>
                                    <td><?php echo $evento->est_nombre ?></td>
                                    <td><a title="Ver" href="<?php echo url("home/evento/detalle/" . $evento->eve_id) ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a> 
                                        <a title="Editar" href="<?php echo url("home/evento/editar/" . $evento->eve_id) ?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> 
                                        <?php if ($evento->est_id===1): ?>
                                        <a title="Inhabilitar" href="<?php echo url("home/evento/inhabilitar/" . $evento->eve_id) ?>" class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-remove"></i></a></td>
                               <?php else:?>
                                        <a title="Habilitar" href="<?php echo url("home/evento/habilitar/" . $evento->eve_id) ?>" class="btn btn-success btn-sm"> <i class="glyphicon glyphicon glyphicon-ok"></i></a>
                                    <?php endif ?>
                                </tr>
                                <?php
                            endforeach
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5" style="text-align: center">Eventos: <?php echo $count - 1 ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div></div>
        </div> 
    </div>
</div>