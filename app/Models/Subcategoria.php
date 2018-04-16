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
        'url_nome',
        'url_image_carga'
    ];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id','id');
    }
}
