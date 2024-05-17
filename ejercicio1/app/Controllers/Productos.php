<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        $db = \Config\Database::connect();
        $query = $db->query("SELECT codigo, nombre, stock FROM productos");
        $resultado = $query->getResultArray();

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
        $data = [
            'titulo' => 'Catálogo de Productos',
            'id' => $id
        ];
        return view('productos/show', $data);
        /*return view('plantilla/header', $data) .
            view('productos/show', $data) .
            view('plantilla/footer', ['copy' => '2023']);*/
    }
}
