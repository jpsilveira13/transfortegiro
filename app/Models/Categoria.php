<?php

namespace transforte\Models;

use transforte\Models\Subcategoria;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria';
    protected $fillable = [
      'nome',
      'url_nome'
    ];

    public function subcategoria(){
        return $this->hasMany(Subcategoria::class);
    }
}
