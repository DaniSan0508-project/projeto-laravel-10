<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestCliente;
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
        $cliente = $this->cliente->find($id);
        if(!$cliente){
            return response()->json(['success' => false, 'message' => 'Cliente não encontrado.'], 404);
        }
        $cliente->delete();
        return response()->json(["success" => true, 'message' => 'Cliente deletado.']);
        
    }

    public function create(FormRequestCliente $request){
        if($request->method() == "POST"){
           $data = $request->only(['nome','email','endereco','logradouro','cep','bairro']);
           $this->cliente->create($data);
            return redirect()->route('cliente.index');
        }
        return view('pages.clientes.create');
    }

    public function update(FormRequestCliente $request, $id){
        if($request->method() == "PUT"){
            $data = $request->only(['nome','email','endereco','logradouro','cep','bairro']);
            $selected = $this->cliente->find($id);
            $selected->update($data);
             return redirect()->route('cliente.index');
         }
         $selectedClient = $this->cliente->where('id','=',$id)->first();
         return view('pages.clientes.update', compact('selectedClient'));
    }
}
