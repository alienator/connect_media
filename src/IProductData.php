<?php namespace ConnectMedia;

interface IProductData
{
  public function obtenerListadoProductos($ruta);
  public function leerArchivoJson($ruta);
  public function buscarProductoPorCodigo($codigo, $ruta);
}
