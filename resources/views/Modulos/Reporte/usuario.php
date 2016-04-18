<?php include ("/../../../../public/dompdf/dompdf_config.inc.php") ;

 $codigoHTML=' 
  <html>
    <head>
        <meta charset="UTF-8">
        <title>Tu Buga</title>
        <meta name="viewport"  content="width=device-width, user-scalable=no, initial-scale=1.0,maximum-scale=1.0, minimum-scale=1.0">

    </head>
    <body>
<div id="box-panel" class="col-lg-12">
    <div class="panel panel-default">
        <div class="panel-heading">
<h1 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>PORTAL BUGA</h1>
<h2 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Reporte de Usuarios</h2>
<h4 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>Fecha y Hora: ' . 
 date("d-m-Y")." ".date("h:i:sa").'</h4>
        </div>
        <div class="panel-body">
            <br>
            <div class="">
                <div class="table-responsive">
                    <table border=1 class="table table-bordered" style="margin: 0 auto; width:100%;">
                        <thead style="font-size:14pt; background-color:lightblue">
                            <tr>
                                <th>No.</th>
                                <th>Nick Usuario</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Estado</th>
                                </tr>
                        </thead>
                        <tbody style="font-size:12pt; text-align:center;">';
                            
                            $count = 1;
                            foreach ($usuarios as $usuario):
                                $codigoHTML.='
                                <tr>
                                    <td>'.$count++.'</td>
                                    <td>'.$usuario->usu_usuario.'</td>
                                    <td>'.$usuario->dus_nombre.'</td>
                                    <td>'.$usuario->dus_apellidos.'</td>';
                                     if ($usuario->usu_activado===0){
                                        $usuario->usu_activado = "Inhabilitado";
                                    } else { $usuario->usu_activado = "Habilitado";
                                    } 
                                    $codigoHTML.='<td>'.$usuario->usu_activado.'</td>
                                </tr>';
                                
                            endforeach;
                            $codigoHTML.='
                        </tbody>
                       <tfoot>
                            <tr>
                                <td colspan="6" style="text-align: center">Total Usuarios:'.($count-1).'</td>
                            </tr>
                        </tfoot>
                    </table>

                </div></div>
        </div> 
    </div>
</div>
</body>
</html>';


$codigoHTML = utf8_encode($codigoHTML);
$dompdf = new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Reporte_tabla_usuarios.pdf");