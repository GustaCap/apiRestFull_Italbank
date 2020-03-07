<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo Alberto',
            'apellido' => 'Camacho Pereira',
            'tipocliente_id' => '1',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo Alberto',
            'apellido' => 'Camacho Pereira',
            'tipocliente_id' => '1',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Carlos Alberto',
            'apellido' => 'Pereira',
            'tipocliente_id' => '1',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Alberto',
            'apellido' => 'Camacho',
            'tipocliente_id' => '1',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo',
            'apellido' => 'Pereira',
            'tipocliente_id' => '1',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo Alberto',
            'apellido' => 'Camacho Pereira',
            'tipocliente_id' => '2',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo Alberto',
            'apellido' => 'Camacho Pereira',
            'tipocliente_id' => '2',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Carlos Alberto',
            'apellido' => 'Pereira',
            'tipocliente_id' => '2',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Alberto',
            'apellido' => 'Camacho',
            'tipocliente_id' => '2',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo',
            'apellido' => 'Pereira',
            'tipocliente_id' => '2',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo Alberto',
            'apellido' => 'Camacho Pereira',
            'tipocliente_id' => '3',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo Alberto',
            'apellido' => 'Camacho Pereira',
            'tipocliente_id' => '3',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Carlos Alberto',
            'apellido' => 'Pereira',
            'tipocliente_id' => '3',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Alberto',
            'apellido' => 'Camacho',
            'tipocliente_id' => '3',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo',
            'apellido' => 'Pereira',
            'tipocliente_id' => '3',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo Alberto',
            'apellido' => 'Camacho Pereira',
            'tipocliente_id' => '4',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo Alberto',
            'apellido' => 'Camacho Pereira',
            'tipocliente_id' => '4',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Carlos Alberto',
            'apellido' => 'Pereira',
            'tipocliente_id' => '4',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Alberto',
            'apellido' => 'Camacho',
            'tipocliente_id' => '4',
        ]);

        DB::table('clientes')->insert([

            'tokenCliente' => Str::random(10),
            'nombre' => 'Gustavo',
            'apellido' => 'Pereira',
            'tipocliente_id' => '4',
        ]);
    }
}
