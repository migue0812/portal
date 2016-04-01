<?php include ("/../../Templates/Frontend/head.php") ?>
<section class="main container">
    <div class="row body-panel">
        <div class="header-panel">
            <div class="logo">
                <a href="#">Configuración<span></span></a>
            </div>
        </div>
        <div>
            <a class="mobile" href="#">MENU</a>
        </div>    
        <div class="content-main">
            <div class="sidebar-panel">
                <ul class="nav-panel">
                    <li id="opcionUno"><a class="enlace-menu" href="">Sitios</a></li>
                    <li id="opcionDos"><a class="enlace-menu" href="">Eventos</a></li>
                    <li id="opcionTres"><a class="enlace-menu" href="#">Amigo</a></li>
                    <li id="opcionCuatro"><a class="enlace-menu" href="#">Admin</a></li>
                    <li id="opcionCinco"><a class="enlace-menu" href="#">Buscador</a></li>
                </ul>
            </div>
            <div class="content">
                <h1>Bienvenido</h1>
                <p>Hola Contenido</p>
                <div class="box">
                    <div class="box-top">Crear Sitio</div>
                    <div id="box-panel">
                        <form>
                            <div class="form-group">
                                <label for="sitio[nombre]">Sitio</label>
                                <input type="text" id="sitio[nombre]" name="sitio[nombre]" class="form-control" placeholder="Nombre sitio">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Categoría:</label>
                                <div class="">
                                    <select id="sitio[categoria]" name="sitio[categoria]">
                                        <option value="1">Cultura y Tradición</option>
                                        <option value="2">Histórico</option>
                                        <option value="3">Ecoturístico</option>
                                        <option value="4">Religioso</option>
                                        <option value="5">Entretenimiento</option>
                                        <option value="6">Deportes</option></select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sitio[direccion]">Direccion</label>
                                <input type="text" id="sitio[direccion]" name="sitio[direccion]" class="form-control" placeholder="Direccion">
                            </div>
                            <div class="form-group">
                                <label for="sitio[telefono]">Telefono</label>
                                <input type="text" id="sitio[telefono]" name="sitio[telefono]" class="form-control" placeholder="Telefono">
                            </div>
                            <div class="form-group">
                                <label for="">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label for="sitio[descripcion]" class="control-label">Descripcion:</label>
                                <div class="">
                                    <textarea id="sitio[descripcion]" name="sitio[descripcion]" class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <input type="submit" class="btn btn-default" value="Crear">
                                    <a class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box">
                    <div class="box-top">Crear Evento</div>
                    <div class="box-panel">
                        <form>
                            <div class="form-group">
                                <label for="sitio[nombre]">Evento:</label>
                                <input type="text" id="evento[nombre]" name="sitio[nombre]" class="form-control" placeholder="Nombre evento">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Categoría:</label>
                                <div class="">
                                    <select id="sitio[categoria]" name="sitio[categoria]">
                                        <option value="1">Cultura y Tradición</option>
                                        <option value="2">Histórico</option>
                                        <option value="3">Ecoturístico</option>
                                        <option value="4">Religioso</option>
                                        <option value="5">Entretenimiento</option>
                                        <option value="6">Deportes</option></select>
                                </div>
                            </div>
                            <div class="form-inline">
                                <div class="form-group">
                                    <label class="control-label">Inicio evento:</label>
                                    <div class="">
                                        <input  required type="date" class="form-control" id="inicio[fecha]" name="registro[fecha]">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Final evento:</label>
                                    <div class="">
                                        <input  required type="date" class="form-control" id="final[fecha]" name="registro[fecha]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sitio[direccion]">Direccion:</label>
                                <input type="text" id="evento[direccion]" name="evento[direccion]" class="form-control" placeholder="Direccion">
                            </div>
                            <div class="form-group">
                                <label for="evento[nombreContacto]">Nombre Contacto:</label>
                                <input type="text" id="evento[nombreContacto]" name="evento[nombreContacto]" class="form-control" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="evento[telefonoContacto]">Teléfono Contacto:</label>
                                <input type="text" id="evento[telefonoContacto]" name="evento[telefonoContacto]" class="form-control" placeholder="Telefono">
                            </div>
                            <div class="form-group">
                                <label for="evento[emailContacto]" class="control-label">Email Contacto:</label>
                                <div class="">
                                    <input required type="email" class="form-control" placeholder="Email" id="evento[emailContacto]" name="evento[emailContacto">
                                </div>
                            </div>  
                            <div class="form-group">
                                <label for="">File input</label>
                                <input type="file" id="exampleInputFile">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label for="evento[descripcion]" class="control-label">Descripcion:</label>
                                <div class="">
                                    <textarea id="evento[descripcion]" name="evento[descripcion]" class="form-control" rows="5" id="comment"></textarea>
                                </div>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Check me out
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="">
                                    <input type="submit" class="btn btn-default" value="Crear">
                                    <a class="btn btn-default btn-cancel" value="Guardar">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box">   
                    <div class="box-top">News </div>
                    <div class="box-panel">
                        Is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </div>
                </div>
                <div class="box">
                    <div class="box-top">News </div>
                    <div class="box-panel">
                        Is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </div>
                </div>
                <div class="box">
                    <div class="box-top">News </div>
                    <div class="box-panel">
                        Is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ("/../../Templates/Frontend/foot.php") ?>