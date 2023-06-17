<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduto;
use App\Models\Cliente;
use App\Models\SharedComponents;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index(Request $request)
    {
        $clientes = $this->cliente->getFilteredClientes($request);
    
        return view('pages.clientes.paginacao', compact('clientes'));
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

    public function create(FormRequestProduto $request){
        $sharedComponents = new SharedComponents();
        if($request->method() == "POST"){
           $data = $request->all();
           $data['valor'] = $sharedComponents->formatacaoMascaraDinheiroDecimal($data['valor']);
            $this->produto->create($data);
            return redirect()->route('produto.index');
        }
        return view('pages.produtos.create');
    }

    public function update(FormRequestProduto $request, $id){
        if($request->method() == "PUT"){
                $sharedComponents = new SharedComponents();
                $data = $request->only(['nome','valor']);
                $data['valor'] = $sharedComponents->formatacaoMascaraDinheiroDecimal($data['valor']);
                $product = $this->produto->find($id);
                $product->update($data);
             return redirect()->route('produto.index');
         }
         $selectedProduct = $this->produto->where('id','=',$id)->first();
         return view('pages.produtos.update', compact('selectedProduct'));
    }
}
