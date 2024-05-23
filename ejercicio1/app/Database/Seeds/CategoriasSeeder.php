<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        $dta = [
            [

                'nombre' => 'bebidas',
            ],
            [

                'nombre' => 'calzado',
            ],
            [

                'nombre' => 'Electronica ',
            ],
            [
                'nombre' => 'Refrescos',
            ],

        ];
        $this->db->table('categorias')->insertBatch($dta);
    }
}
