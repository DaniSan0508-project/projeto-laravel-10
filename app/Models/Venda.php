<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_da_venda',
        'produto_id',
        'cliente_id'
    ];

    public function getFilteredVendas($request)
    {
        $pesquisa = $request->pesquisa;
    
        if (!empty($pesquisa)) {
            return $this->where('numero_da_venda','LIKE', "%$pesquisa%")
            ->orWhereHas('cliente', function ($query) use ($pesquisa) {
                $query->where('nome', 'LIKE', "%$pesquisa%");
            })
            ->orWhereHas('produto', function ($query) use ($pesquisa) {
                $query->where('nome', 'LIKE', "%$pesquisa%");
            })
            ->paginate(10);
        } else {
            return $this->paginate(10);
        }
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }


    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
