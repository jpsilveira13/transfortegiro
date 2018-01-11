<?php

namespace transforte\Http\Controllers;

use transforte\Models\Subcategoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use transforte\Models\Categoria;

class SiteController extends Controller
{

    private $equipamento;
    private $subcategoria;
    public function __construct(Categoria $equipamento,Subcategoria $subcategoria){
        $this->equipamento = $equipamento;
        $this->subcategoria = $subcategoria;
    }

    public function site(){


        return view('site.app');
    }

    public function equipamentos($url_nome){

        $idCategoria = $this->equipamento->where('url_nome',$url_nome)->first(['nome','id']);
        $nomeCategoria = $idCategoria->nome;
        $equipamentos = $this->subcategoria->where('categoria_id',$idCategoria->id)->with('categoria')->get();
        return view('equipamento.equipamentos',compact('equipamentos','nomeCategoria'));
    }

    public function equipamento($url_nome,$url_equipamento){
        $equipamento = $this->subcategoria->where('url_nome',$url_equipamento)->orWhere('url_nome',$url_nome)->first();
        return view('equipamento.equipamento',compact('equipamento'));
    }

    public function orcamento($nome_equipamento){
        $orcamento = $this->subcategoria->where('url_nome',$nome_equipamento)->first();

        return view('site.orcamento',compact('orcamento'));
    }
}
