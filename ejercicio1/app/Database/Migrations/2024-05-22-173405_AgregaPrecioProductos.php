<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregaPrecioProductos extends Migration
{
    public function up()
    {
        $campos = [
            'precio' => [
                'type' => 'decimal',
                'constraint' => '10,2', //10 de longitud , 2 decimales
                'after' => 'nombre', //Despues de otra columna
                'null' => false,      //Obligatorio agregar no nulo
                'default' => '0.00'
            ]
        ];
        $this->forge->addColumn('productos', $campos);
    }

    public function down()
    {
        $this->forge->dropColumn('productos', 'precio');
    }
}
