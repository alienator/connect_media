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

  public function buscarProductoPorCodigo($codigo, $ruta)
  {
    $productos = $this->leerArchivoJson($ruta);
    $productos = \json_decode($productos, true);

    $encontradoEn = array_search($codigo, array_column($productos['productos'], 'codigo'));

    return ($encontradoEn !== false) ? $productos['productos'][$encontradoEn] : false;
  }
}
