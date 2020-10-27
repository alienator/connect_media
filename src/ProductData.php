<?php namespace ConnectMedia;
use ConnectMedia\IProductData;

class ProductData implements IProductData
{
  public function obtenerListadoProductos($ruta)
  {
    $listado = $this->leerArchivoJson($ruta);
    return json_decode($listado, true);
  }

  public function leerArchivoJson($ruta)
  {
    $resultado = @\file_get_contents($ruta);

    if ($resultado === false) return false;

    return $resultado;
  }
}
