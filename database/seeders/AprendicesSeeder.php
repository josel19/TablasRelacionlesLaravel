<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
class AprendicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('aprendices')->insert([
            'nombre' => 'Jose',
            'apellido' => 'Lugo Gomez',
            'telefono' => '3102064432',
            'direccion' => 'cra15d #6609',
            'correo' => 'jjlugogomez123@gmail.com',
            'edad' => '18',
            'id_ficha' => '1',
        ]);
    }
}
