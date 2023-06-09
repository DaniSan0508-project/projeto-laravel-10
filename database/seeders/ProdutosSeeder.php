<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $produtos = [
            ['nome' => 'Produto 1', 'valor' => 10.99],
            ['nome' => 'Produto 2', 'valor' => 20.50],
            ['nome' => 'Produto 3', 'valor' => 5.99],
        ];

        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
