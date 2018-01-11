<?php

namespace transforte\Models;

use Illuminate\Database\Eloquent\Model;
use transforte\Models\Categoria;

class Subcategoria extends Model
{
    protected $table = "subcategoria";

    protected $fillable = [
        'categoria_id',
        'nome',
        'modelo',
        'url_nome'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id','id');
    }
}
