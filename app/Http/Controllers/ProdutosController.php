<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('pages.produtos.paginacao', compact('produtos'));
    }
}
