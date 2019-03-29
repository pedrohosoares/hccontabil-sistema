<?php

use Illuminate\Database\Seeder;

class FornecedoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fornecedores')->insert([
        	'empresa'  => str_random(10),
        	'cnpj'	   => mt_rand(100000000, 999999999),
            'email'    => str_random(5).'@gmail.com',
            'telefone' => mt_rand(100000000, 999999999),
            'whatsapp' => mt_rand(100000000, 999999999),
            'site'	   => 'www'.str_random(10).'com',
            'endereco' => str_random(10),
            'cidade'   => 'SAP',
            'estado'   => 'RS'
        ]);
    }
}
