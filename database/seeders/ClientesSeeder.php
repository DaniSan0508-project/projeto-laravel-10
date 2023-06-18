<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    public function run(): void
    {
        {
            $clientes = [
                ['nome' => 'Cliente 1','email'=>'cliente1@gmail.com', 'endereco' => 'Rua x', 'logradouro' => 'Rua x', 'cep' => '032490000', 'bairro'=>'jardim x'],
                ['nome' => 'Cliente 2','email'=>'cliente2@gmail.com', 'endereco' => 'Rua y', 'logradouro' => 'Rua y', 'cep' => '032490000', 'bairro'=>'jardim y'],
                ['nome' => 'Cliente 3','email'=>'cliente3@gmail.com', 'endereco' => 'Rua z', 'logradouro' => 'Rua z', 'cep' => '032490000', 'bairro'=>'jardim z'],
            ];
    
            foreach ($clientes as $cliente) {
                Cliente::create($cliente);
            }
        }
    }
}
