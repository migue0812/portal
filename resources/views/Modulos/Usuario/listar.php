<div id="box-panel" class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Formulario Usuario</h3>
        </div>
        <div class="panel-body">
            <br>
            <div class="">
                <a class="btn btn-success" href="<?php echo url("reporte/usuario") ?>">Reporte</a>
                <br><br>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nick Usuario</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($usuarios as $usuario):
                                ?>
                                <tr>
                                    <td><?php echo $count++ ?></td>
                                    <td><?php echo $usuario->usu_usuario ?></td>
                                    <?php if ($usuario->usu_activado===0){
                                        $usuario->usu_activado = "Inhabilitado";
                                    } else { $usuario->usu_activado = "Habilitado";
                                    } ?>
                                    <td><?php echo $usuario->usu_activado ?></td>
                                    <td><a title="Ver" href="<?php echo url("usuario/ver/" . $usuario->usu_id) ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a> 
                                        <?php if ($usuario->usu_activado==="Habilitado"): ?>
                                        <a title="Inhabilitar" href="<?php echo url("usuario/inhabilitar/" . $usuario->usu_id) ?>" class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-remove"></i></a>
                                        <?php else:?>
                                        <a title="Habilitar" href="<?php echo url("usuario/habilitar/" . $usuario->usu_id) ?>" class="btn btn-success btn-sm"> <i class="glyphicon glyphicon glyphicon-ok"></i></a>
                                    <?php endif ?>
                                    </td>
                                </tr>
                                <?php
                            endforeach
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" style="text-align: center">Usuarios: <?php echo $count - 1 ?></td>
                            </tr>
                        </tfoot>
                    </table>

                </div></div>
        </div> 
    </div>
</div>