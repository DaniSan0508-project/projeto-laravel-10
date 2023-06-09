<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(Request $request)
    {
        $produtosFiltrados = $request->pesquisa;
        $produtos = $this->produto->where('nome', 'LIKE', "%$produtosFiltrados%")->paginate(10);
    
        return view('pages.produtos.paginacao', compact('produtos'));
    }
}
