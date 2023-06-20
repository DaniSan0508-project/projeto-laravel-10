<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestVenda;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function __construct(Venda $venda)
    {
        $this->venda = $venda;
    }

    public function index(Request $request)
    {
        $vendas = $this->venda->getFilteredVendas($request);
    
        return view('pages.vendas.paginacao', compact('vendas'));
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $cliente = $this->venda->find($id);
        if(!$cliente){
            return response()->json(['success' => false, 'message' => 'Cliente não encontrado.'], 404);
        }
        $cliente->delete();
        return response()->json(["success" => true, 'message' => 'Cliente deletado.']);
        
    }

    public function create(FormRequestVenda $request){
        if($request->method() == "POST"){
           $data = $request->all();
           $this->venda->create($data);
            return redirect()->route('venda.index');
        }
        $saleNumber = Venda::max('numero_da_venda') + 1;
        $produtos = Produto::all();
        $clientes = Cliente::all();
        return view('pages.vendas.create', compact('saleNumber', 'produtos', 'clientes'));
    }
}
