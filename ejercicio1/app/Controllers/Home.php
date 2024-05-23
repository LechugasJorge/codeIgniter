<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //return view('welcome_message');
        //echo "Hola Mundo";
        /* $migrate = \Config\Services::migrations();
        try {
            $migrate->latest();
            //$migrate->regress(-1);
        } catch (\Throwable $e) {
            // Si ocurre una excepción, la captura y la muestra
            echo $e;
        }
        $seeder = \Config\Database::seeder();
        $seeder->call('CategoriasSeeder');*/
    }
}
