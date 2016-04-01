<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../web/css/bootstrap.min.css">
    <link rel="stylesheet" href="../web/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../web/css/main.css">
    </head>
    <body>
        <div id="ver">
        <div class="container container-fluid">

      <h1>Usuario</h1>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <h3>Nombre:</h3>
            <?php echo $data[0]->usuario ?>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <a href="index.php" class="btn btn-danger hidden-xs">Volver</a>
          <a href="index.php" class="btn btn-danger btn-block btn-lg visible-xs">Volver</a>
        </div>
      </div>

    </div>
            </div>


    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
