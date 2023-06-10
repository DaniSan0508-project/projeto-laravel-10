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
        $produtos = $this-> produto->getFilteredProducts($request);
    
        return view('pages.produtos.paginacao', compact('produtos'));
    }
}
