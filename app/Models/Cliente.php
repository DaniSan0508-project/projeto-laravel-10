<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'email',
        'endereco',
        'logradouro',
        'cep',
        'bairro',
    ];

    public function getFilteredClientes($request)
    {
        $pesquisa = $request->pesquisa;
    
        if (!empty($pesquisa)) {
            return $this->where('nome','LIKE', "%$pesquisa%")->paginate(10);
        } else {
            return $this->paginate(10);
        }
    }
}
