<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use GuzzleHttp\Psr7\Response;
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

    public function delete(Request $request)
    {
        $id = $request->id;
        $produto = $this->produto->find($id);
        if(!$produto){
            return response()->json(['success' => false, 'message' => 'Produto não encontrado.'], 404);
        }
        $produto->delete();
        return response()->json(["success" => true, 'message' => 'Produto deletado.']);
        
    }
}
