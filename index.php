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
    <title>Lista de Productos</title>
  </head>
  <body>
    <h1>Lista de Productos</h1>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Código</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>...</th>
        </tr>
      </thead>
      <tbody>
          <?php
            $ruta = __DIR__ . "/tests/resources/productos.json";
            $productData = new ProductData();
            $listado = $productData->obtenerListadoProductos($ruta);

            foreach($listado['productos'] as $producto) :
          ?>
          <tr>
            <td><?php echo $producto['codigo']?></td>
            <td><?php echo $producto['nombre']?></td>
            <td><?php echo $producto['precio']?></td>
            <td><a href="detalles.php?codigo=<?php echo $producto['codigo']?>">ver detalles</a></td>
          </tr>
          <?php
            endforeach;
          ?>
      </tbody>

    </table>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
