<?php

namespace Database\Seeders;

use App\Models\Venda;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VendasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendas = [
            ['numero_da_venda' => 1, 'produto_id' => 20, 'cliente_id' => 1],
            ['numero_da_venda' => 2, 'produto_id' => 5, 'cliente_id' => 5],
        ];

        foreach ($vendas as $venda) {
            Venda::create($venda);
        }
    }
}
