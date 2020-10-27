<?php
require 'vendor/autoload.php';
use ConnectMedia\ProductData;

ini_set('display_errors', 1);
error_reporting(E_ALL);
 ?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Detalles de Producto</title>
  </head>
  <body>
    <h1>Detalles de Producto</h1>
    <?php
    $ruta = __DIR__ . "/tests/resources/productos.json";
    $codigo = $_GET['codigo'];
    $productData = new ProductData();
    $producto = $productData->buscarProductoPorCodigo($codigo, $ruta);
     ?>
    <div class="card">
      <div class="card-header">
        <?php echo $producto['codigo']?>
      </div>
      <div class="card-body">
        <h5 class="card-title"><?php echo $producto['nombre']?></h5>
        <p class="card-text"><?php echo $producto['descripcion']?></p>
        <p>Precio: <?php echo $producto['precio']?></p>
        <a href="index.php" class="btn btn-primary">volver</a>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
