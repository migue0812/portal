<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="active">
            <a href="#"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#menuOne"><i class="fa fa-fw fa-folder-o"></i> Categorias <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="menuOne" class="collapse">
                <li>
                    <a class="enlace-menu" href="<?php echo url("home/categoria/registrar") ?>"><i class="fa fa-fw fa-file-code-o"></i> Crear</a>
                </li>
                <li>
                    <a class="enlace-menu" href="<?php echo url("home/categoria/listar") ?>"><i class="fa fa-fw fa-eye"></i> Listar</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#menuTwo"><i class="fa fa-fw fa-folder-o"></i> Subcategorias <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="menuTwo" class="collapse">
                <li>
                    <a class="enlace-menu" href="<?php echo url("home/subcategoria/registrar") ?>"><i class="fa fa-fw fa-file-code-o"></i> Crear</a>
                </li>
                <li>
                    <a class="enlace-menu" href="<?php echo url("home/subcategoria/listar") ?>"><i class="fa fa-fw fa-eye"></i> Listar</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#menuTree"><i class="fa fa-fw fa-edit"></i> Sitios <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="menuTree" class="collapse">
                <li>
                    <a class="enlace-menu" href="<?php echo url("home/sitio/registrar") ?>"><i class="fa fa-fw fa-file"></i> Crear</a>
                </li>
                <li>
                    <a class="enlace-menu" href="<?php echo url("home/sitio/listar") ?>"><i class="fa fa-fw fa-eye"></i> Listar</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#menuFour"><i class="fa fa-fw fa-edit"></i> Eventos <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="menuFour" class="collapse">
                <li>
                    <a class="enlace-menu" href="<?php echo url("home/evento/registrar") ?>"><i class="fa fa-fw fa-file"></i> Crear</a>
                </li>
                <li>
                    <a class="enlace-menu" href="<?php echo url("home/evento/listar") ?>"><i class="fa fa-fw fa-eye"></i> Listar</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="enlace-menu" href="<?php echo url("usuario/listar") ?>"><i class="fa fa-fw fa-dashboard"></i> Usuarios</a>
        </li>
        <li>
            <a class="enlace-menu" href="<?php echo url("seguridad/editaradmin") ?>"><i class="fa fa-fw fa-wrench"></i> Configuracion</a>
        </li>

    </ul>
</div>
<!-- /.navbar-collapse -->
</nav>