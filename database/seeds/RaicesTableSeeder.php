<?php

use Illuminate\Database\Seeder;

class RaicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('raices')->insert([

            'carpetaRaiz' => 'CNOM Planilla de Verificacion de Requisitos',
            'tipocliente_id' => '1',

        ]);

        DB::table('raices')->insert([

            'carpetaRaiz' => 'CNOM Planillas Solicitud',
            'tipocliente_id' => '1',

        ]);

        DB::table('raices')->insert([

            'carpetaRaiz' => 'CNOM Documentacion',
            'tipocliente_id' => '1',

        ]);
    }
}
