<?php

use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Opção 1
        DB::table('contatos')->insert([
           'saudacao' => 'Sr.',
           'nome' => 'Janlon de Carvalho Rodrigues',
           'cpf' => '17274681044',
           'celular' => '(13) 98806-7251',
           'telefone' => '(13) 98806-7251',
           'nascimento' => '1979/03/24',
           'email' => 'janlon@outlook.com.br',
           'created_at' => date('Y-m-d H:i:s')
        ]);

        // Opção 2
        factory(App\Contato::class, 20)->create();
    }
}
