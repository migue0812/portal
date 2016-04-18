<div id="box-panel" class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Formulario Subcategoría</h3>
        </div>
        <div class="panel-body">
            <br>
            <div class="">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nombre  Subcategoría</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            foreach ($subcategorias as $subcategoria):
                                ?>
                                <tr>
                                    <td><?php echo $count++ ?></td>
                                    <td><?php echo $subcategoria->subcat_nombre ?></td>
                                    <?php if ($subcategoria->subcat_activo===0){
                                        $subcategoria->subcat_activo = "Inhabilitada";
                                    } else { $subcategoria->subcat_activo = "Habilitada";
                                    } ?>
                                    <td><?php echo $subcategoria->subcat_activo ?></td>
                                    <td><a title="Editar" href="<?php echo url("home/subcategoria/editar/" . $subcategoria->subcat_id) ?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> 
                                        <?php if ($subcategoria->subcat_activo==="Habilitada"): ?>
                                        <a title="Inhabilitar" href="<?php echo url("home/subcategoria/inhabilitar/" . $subcategoria->subcat_id) ?>" class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-remove"></i></a>
                                        <?php else:?>
                                        <a title="Habilitar" href="<?php echo url("home/subcategoria/habilitar/" . $subcategoria->subcat_id) ?>" class="btn btn-success btn-sm"> <i class="glyphicon glyphicon glyphicon-ok"></i></a>
                                    <?php endif ?>
                                    </td>
                                </tr>
                                <?php
                            endforeach
                            ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="6" style="text-align: center">Subcategorías: <?php echo $count - 1 ?></td>
                            </tr>
                        </tfoot>
                    </table>

                </div></div>
        </div> 
    </div>
</div>