<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<br>
        <div class="container container-fluid">

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nombre Sitio</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
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
                                <td><?php echo $sitio->sit_direccion ?></td>
                                <td><?php echo $sitio->sit_telefono ?></td>
                                <td><a href="<?php echo url("home/sitio/detalle/" . $sitio->sit_id) ?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a> 
                                    <a href="<?php echo url("home/sitio/editar/".$sitio->sit_id) ?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> 
                                    <a href="" class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-remove"></i></a></td>
                            </tr>
                          <?php
                    endforeach
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="5" style="text-align: center">Sitios: <?php echo $count-1 ?></td>
                        </tr>
                    </tfoot>
                </table>

            </div></div>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>