<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use ConnectMedia\ProductData;

final class ProductDataTest extends TestCase
{
  public function test_list_of_products_can_be_obtained(): void
  {
    $listaEsperada = [
      'productos'=> [
        [
          'codigo' => 'A001',
          'nombre' => 'Test 1',
          'descripcion' => 'Producto test 1',
          'precio' => 5.6
        ],
        [
          'codigo' => 'A002',
          'nombre' => 'Test 2',
          'descripcion' => 'Producto test 2',
          'precio' => 0.2
        ],
        [
          'codigo' => 'A003',
          'nombre' => 'Test 3',
          'descripcion' => 'Producto test 3',
          'precio' => 12.89
        ],
        [
          'codigo' => 'A004',
          'nombre' => 'Test 4',
          'descripcion' => 'Producto test 4',
          'precio' => 59.658
        ],
        [
          'codigo' => 'A005',
          'nombre' => 'Test 5',
          'descripcion' => 'Producto test 5',
          'precio' => 0.55
        ]

      ]
    ];

    $ruta = __DIR__ . "/resources/productos.json";

    $productData = new ProductData();
    $listaObtenida = $productData->obtenerListadoProductos($ruta);

    $this->assertEquals($listaEsperada, $listaObtenida);
  }

  public function test_a_product_can_be_finded(): void
  {
    $esperado = [
      'codigo' => 'A003',
      'nombre' => 'Test 3',
      'descripcion' => 'Producto test 3',
      'precio' => 12.89
    ];

    $codigo = "A003";
    $ruta = __DIR__ . "/resources/productos.json";

    $productData = new ProductData();
    $productoObtenido = $productData->buscarProductoPorCodigo($codigo, $ruta);

    $this->assertEquals($esperado, $productoObtenido);
  }
}
