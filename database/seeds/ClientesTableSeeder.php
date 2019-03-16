<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('clientes')->insert([
            'nome'     => str_random(10),
            'email'    => str_random(5).'@gmail.com',
            'telefone' => mt_rand(100000, 999999),
            'whatsapp' => mt_rand(100000, 999999),
            'endereco' => str_random(10),
            'bairro'   => 'Bairro',
            'cidade'   => 'SAP',
            'estado'   => 'RS'
        ]);
    }
}
