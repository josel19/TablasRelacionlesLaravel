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
            'Nombre' => 'Jose',
            'Apellido' => 'Lugo Gomez',
            'Telefono' => '3102064432',
            'Direccion' => 'cra15d #6609',
            'Correo' => 'jjlugogomez123@gmail.com',
            'Edad' => '18',
            'ficha_id' => '1',
        ]);
    }
}
