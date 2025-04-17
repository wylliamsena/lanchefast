<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Cliente Exemplo1',
            'endereco' => 'Rua Exemplo1, 111',
            'telefone' => 'Rua Exemplo1, 111',
            'cpf' => 'Rua Exemplo1, 111',
            'email' => 'Rua Exemplo1, 111',
            'password' => 'Rua Exemplo1, 111',
        ]);

        Cliente::create([
            'nome' => 'Cliente Exemplo2',
            'endereco' => 'Rua Exemplo2, 222',
            'telefone' => 'Rua Exemplo2, 222',
            'cpf' => 'Rua Exemplo2, 222',
            'email' => 'Rua Exemplo2, 222',
            'password' => 'Rua Exemplo2, 222',
        ]);
    }
}
