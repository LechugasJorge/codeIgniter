<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreaTablaCategorias extends Migration
{
    public function up() // Método que se ejecuta al aplicar la migración
    {
        $this->forge->dropTable('categorias'); // Elimina la tabla 'categorias'
    }

    public function down() // Método que se ejecuta al revertir la migración
    {
        $this->forge->addField([ // Añade campos a la tabla utilizando el objeto forge
            'id' => [ // Define un campo 'id'
                'type' => 'INT', // El tipo de dato es entero
                'constraint' => 11, // El tamaño del campo es 11
            ],
            'nombre' => [ // Define un campo 'nombre'
                'type' => 'VARCHAR', // El tipo de dato es cadena de texto
                'constraint' => 100, // El tamaño máximo es 100 caracteres
            ],
        ]);
        $this->forge->addKey('id', true); // Establece 'id' como clave primaria
        $this->forge->createTable('categorias'); // Crea la tabla 'categorias'

    }
}
