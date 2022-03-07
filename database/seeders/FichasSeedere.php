<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
class FichasSeedere extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fichas')->insert([
            'Nombre_ficha' => 'Adsi_58',
            'Coordinacion' => 'Sede tic',
        ]);
    }
}
