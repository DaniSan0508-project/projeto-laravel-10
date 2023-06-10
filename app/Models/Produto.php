<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'valor',
    ];

    public function getFilteredProducts($request)
    {
        $pesquisa = $request->pesquisa;
    
        if (!empty($pesquisa)) {
            return $this->where('nome','LIKE', "%$pesquisa%")->paginate(10);
        } else {
            return $this->paginate(10);
        }
    }    
}
