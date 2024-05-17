<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model
{
    protected $table      = 'productos';
    protected $primaryKey = 'idproductos';
    protected $useAutoIncrement = true;
    protected $returnType = 'array'; //object
    protected $useSoftDeletes = true;
    protected $allowedFields = ['codigo', 'nombre', 'stock', 'id_almacen', 'estatus'];
    //Datos
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'fecha_alta';
    protected $updatedField = 'fecha_modifica';
    protected $deletedField = 'fecha_elimina';
}
