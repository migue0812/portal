<div id="box-panel" class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Formulario Categoria</h3>
        </div>
        <div class="panel-body">
            <br>
            <div class="">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre Categoría</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($categorias as $categoria):
                                ?>
                                <tr>
                                    <td><?php echo $count++ ?></td>
                                    <td><?php echo $categoria->cat_nombre ?></td>
                                    <?php if ($categoria->cat_activo===0){
                                        $categoria->cat_activo = "Inhabilitada";
                                    } else { $categoria->cat_activo = "Habilitada";
                                    } ?>
                                    <td><?php echo $categoria->cat_activo ?></td>
                                    <td><a title="Ver" href="<?php echo url("home/categoria/detalle/" . $categoria->cat_id) ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a> 
                                        <a title="Editar" href="<?php echo url("home/categoria/editar/" . $categoria->cat_id) ?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> 
                                        <?php if ($categoria->cat_activo==="Habilitada"): ?>
                                        <a title="Inhabilitar" href="<?php echo url("home/categoria/inhabilitar/" . $categoria->cat_id) ?>" class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-remove"></i></a>
                                        <?php else:?>
                                        <a title="Habilitar" href="<?php echo url("home/categoria/habilitar/" . $categoria->cat_id) ?>" class="btn btn-success btn-sm"> <i class="glyphicon glyphicon glyphicon-ok"></i></a>
                                    <?php endif ?>
                                    </td>
                                </tr>
                                <?php
                            endforeach
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" style="text-align: center">Categorías: <?php echo $count - 1 ?></td>
                            </tr>
                        </tfoot>
                    </table>

                </div></div>
        </div> 
    </div>
</div>