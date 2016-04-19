<?php include ("/../../Templates/Backend/head.php") ?>
<?php include ("/../../Templates/Backend/nav.php") ?>
<?php include ("/../../Templates/Backend/menu.php") ?>
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Admin Control <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Control Panel
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="alert alert-info alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <i class="fa fa-info-circle"></i>  <strong>Bienvenido Admin</strong> Todos Los Permisos <a href="" class="alert-link"> De Administrador </a> Gestiona!
                </div>
                <?php if (Session::has("registrar")):?>
    <div class="alert alert-success alert-dismissible center-block" role="alert"><?php echo Session::get("registrar") ?></div>
                <?php endif ?>
    <?php if (Session::has("editar")):?>
    <div class="alert alert-warning alert-dismissible center-block" role="alert"><?php echo Session::get("editar") ?></div>
                <?php endif ?>
    <?php if (Session::has("inhabilitar")):?>
    <div class="alert alert-danger alert-dismissible center-block" role="alert"><?php echo Session::get("inhabilitar") ?></div>
                <?php endif ?>
    <?php if (Session::has("habilitar")):?>
    <div class="alert alert-info alert-dismissible center-block" role="alert"><?php echo Session::get("habilitar") ?></div>
                <?php endif ?>
    <?php if (Session::has("adminEditado")):?>
    <div class="alert alert-warning alert-dismissible center-block" role="alert"><?php echo Session::get("adminEditado") ?></div>
                <?php endif ?>
        <?php if ($errors->any()): ?>
                         <div class="alert alert-danger alert-dismissible center-block" role="alert">
                             <ul>
                              <?php foreach ($errors->all() as $error): ?>  
                                 <li><?php echo $error ?></li>
                                 <?php endforeach ?>
                             </ul>
                         </div>
                        <?php endif ?>
            </div>
        </div>
        <!-- /.row -->
        <div id="box-panel" class="row">





        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- jQuery -->
<?php include ("/../../Templates/Backend/foot.php") ?>
