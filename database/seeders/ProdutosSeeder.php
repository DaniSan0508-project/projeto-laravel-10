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
            ['nome' => 'Produto 4', 'valor' => 10.99],
            ['nome' => 'Produto 5', 'valor' => 20.50],
            ['nome' => 'Produto 6', 'valor' => 5.99],
            ['nome' => 'Produto 7', 'valor' => 10.99],
            ['nome' => 'Produto 8', 'valor' => 20.50],
            ['nome' => 'Produto 9', 'valor' => 5.99],
            ['nome' => 'Produto 10', 'valor' => 100.99],
            ['nome' => 'Produto 11', 'valor' => 20.50],
            ['nome' => 'Produto 12', 'valor' => 540.99],
        ];

        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
