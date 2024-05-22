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

        echo '<br><br><br><br>';

        $db = \Config\Database::connect();
        $builder = $db->table('productos');
        $builder->select(
            'productos.id_almacen, 
                            productos.codigo,  
                            productos.nombre,
                            productos.stock,
                            almacen.nombre as almacen'
        );
        $builder->join('almacen', 'productos.id_almacen=almacen.idalmacen');
        $query = $builder->get();
        $resultado = $query->getResultArray();
        echo $db->getLastQuery();


        $productos = new ProductosModel();

        //$resultado =  $productos->where('estatus', 1)->findAll();

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
            'codigo' => "33333",
            'nombre' => 'Carro',
        ];
        echo $this->productosModel->purgeDeleted();

        echo $this->productosModel->getInsertId(); //retorna el ID insertado
    }
}
