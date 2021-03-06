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
                <li>Equipamento </li>
                <li><a href="{{route('solo.equipamento',['url_nome' => $equipamento->categoria->url_nome] )}}"> {{$equipamento->categoria->nome}}</a></li>
                <li>{{$equipamento->nome}}</li>
            </ul>
        </div>
    </section>
    <!-- //banner1 -->

    <!-- services -->
    <div  style="background: #F4F4F4; padding-top: 30px">
        <div class="container">
            <div class="row">
                <section class="lista-produto" style="margin-bottom: 20px">
                    <div class="col-md-8  col-xs-12">
                        <h2 class="tit-simple">{{$equipamento->modelo}}</h2>
                        <h2 class="subtitulo">Descrição da Categoria</h2>
                        <p>{!! $equipamento->descricao !!}</p>
                        <img src="{{url('images/servicos')}}/{{$equipamento->url_image}}"  class="img-responsive center-block" alt="Gráfico de Carga">
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <section class="sidebar-equipamento">
                            <div class="info-equipamentos">
                                @if($equipamento->categoria_id != 4)
                                    <ul>
                                        <li><i class="fa fa-cubes" aria-hidden="true"></i><span>Capacidade máxima: {{$equipamento->capacidade}}</span></li>


                                        <li><i class="fa fa-arrow-up" aria-hidden="true"></i> <span>Altura máxima de elevação da lança telescópica: {{$equipamento->altura_lanca}}</span></li>

                                        <li><i class="fa fa-arrow-up" aria-hidden="true"></i> <span>Altura máxima de elevação lança telescópica + JIB: 40</span></li>

                                        <li><i class="fa fa-level-up" aria-hidden="true"></i> <span>Comprimento: {{$equipamento->comprimento}}</span></li>

                                    </ul>
                                @else
                                    <ul>
                                        <li><i class="fa fa-cubes" aria-hidden="true"></i><span>Capacidade mínima: 3 m³</span></li>
                                        <li><i class="fa fa-cubes" aria-hidden="true"></i><span>Capacidade máxima: 5 m³</span></li>

                                    </ul>
                                @endif
                            </div>

                        </section>
                    </div>
                    <div class="clearfix"></div>

                    @if($equipamento->categoria_id ==2)
                        <div class="col-md-12">
                            <div class="informacoes_tecnicas">

                                <div>
                                    <h3>Gráfico/Tabela de Carga</h3>
                                    <figure><img src="{{url('images/servicos')}}/{{$equipamento->url_image_carga}}"  class="img-responsive center-block" alt="Gráfico de Carga"></figure>
                                </div>

                            </div>
                        </div>


                    @elseif($equipamento->categoria_id == 1)

                        <div class="col-md-12">
                            <div class="informacoes_tecnicas">

                                <div>
                                    <h3>Gráfico/Tabela de Carga</h3>
                                    @for($i = 1; $i<3;$i++)
                                        <figure><img src="{{url('images/servicos/carga-grafico')}}{{$i}}.jpg"  class="img-responsive center-block" alt="Gráfico de Carga"></figure>
                                    @endfor
                                </div>

                            </div>
                        </div>

                    @endif

                </section>

            </div>
        </div>
    </div>
@endsection