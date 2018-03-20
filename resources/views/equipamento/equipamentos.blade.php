@extends('site.index')
@section('equipamento')
    <link href="{{asset('css/equipamento.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')

    <section class="bread-equipamentos text-center">
        <div class="container">
            <h1>Equipamento</h1>
            <ul class="breadcrumb">
                <li><a href="{{url('/')}}">Home </a></li>
                <li>Equipamento</li>
                <li>{{$nomeCategoria}}</li>
            </ul>
        </div>
    </section>
    <!-- //banner1 -->

    <!-- services -->
    <div  style="background: #F4F4F4; padding-top: 30px">
        <div class="container">
            <div class="row">
                <section class="lista-produtos">
                    @if($equipamentos->count() > 0)
                        <ul>
                            @foreach($equipamentos as $equipamento)
                                <div class="col-md-4 col-lg-4 col-xs-12 col-sm-6">
                                    <li>
                                        <a href="{{route('equipamentos',['url_nome' => $equipamento->categoria->url_nome,'url_equipamento' => $equipamento->url_nome])}}" title="Locação de Guindastes">
                                            <figure><img width="320" height="200"  src="{{url('images/galeria')}}/{{$equipamento->url_image}}" class="img-responsive center-block" alt="Locação de Guindastes"></figure>
                                            <span>
                            <h2 class="text-center">{{$equipamento->nome}}</h2>
                            <p class="text-center text-uppercase">{!! str_limit($equipamento->descricao,$limit= 100,$end = '...') !!} </p>

                                                    </span>
                                            <div class="botao-amarelo text-center">SAIBA MAIS</div>
                                        </a>
                                    </li>
                                </div>
                            @endforeach
                        </ul>
                    @else
                        <h1 class="text-center text-uppercase "><strong>Equipamento não cadastrado!</strong></h1>
                        <br />
                    @endif
                </section>
            </div>
        </div>
    </div>
@endsection