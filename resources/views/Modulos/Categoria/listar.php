<?php include ("/../../Templates/Frontend/head.php") ?>
<?php include ("/../../Templates/Frontend/header.php") ?>
<br>
        <div class="container container-fluid">
                      
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nombre Categoría</th>
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
                                <td><a href="" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-eye-open"></i></a> 
                                    <a href="<?php echo url("home/categoria/editar/".$categoria->cat_id) ?>" class="btn btn-primary btn-sm"><i class="glyphicon glyphicon-pencil"></i></a> 
                                    <a href="" class="btn btn-danger btn-sm"> <i class="glyphicon glyphicon-remove"></i></a></td>
                            </tr>
                          <?php
                    endforeach
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" style="text-align: center">Categorías: <?php echo $count-1 ?></td>
                        </tr>
                    </tfoot>
                </table>

            </div></div>
<?php include ("/../../Templates/Frontend/foot.php") ?>
<?php include ("/../../Templates/Frontend/footer.php") ?>