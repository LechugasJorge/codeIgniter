<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
    protected $productosModel;

    public function __construct()
    {
        $this->productosModel = new ProductosModel();
    }
    public function index()
    {
        /* $db = \Config\Database::connect();
        $query = $db->query("SELECT codigo, nombre, stock FROM productos");
        $resultado = $query->getResultArray();
*/
        $productos = new ProductosModel();

        $resultado =  $productos->findAll();

        $data = ['titulo' => 'Catálogo de Productos', 'productos' => $resultado];

        //$data = ['titulo' => 'Catálogo de Productos'];
        /* return view('plantilla/header', $data) .
            view('productos/index', $data) .
            view('plantilla/footer', ['copy' => '2023']);
        */
        return view('productos/index', $data);
    }
    public function show($id)
    {
        $productoModel = new ProductosModel();

        $producto =  $productoModel->find($id);

        $data = [
            'titulo' => 'Catálogo de Productos',
            'producto' => $producto
        ];
        return view('productos/show', $data);
        /*return view('plantilla/header', $data) .
            view('productos/show', $data) .
            view('plantilla/footer', ['copy' => '2023']);*/
    }

    public function transaccion()
    {
        $data = [
            'codigo' => "09860896098",
            'nombre' => 'laptop',
            'stock' => 7,
            'id_almacen' => 1,
            'estatus' => 1
        ];
        echo $this->productosModel->insert($data, false);//retorna el ID insertado
    }
}