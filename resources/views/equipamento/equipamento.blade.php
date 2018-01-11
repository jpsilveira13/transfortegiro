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
                <section class="lista-produto">
                    <div class="col-md-8  col-xs-12">
                        <h2 class="tit-simple">Lorem Ipsum</h2>
                        <h2 class="subtitulo">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h2>
                        <p>Lorem <strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </strong>orem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                        <p>Lorem <strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </strong>orem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                        <p>Lorem <strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </strong>orem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
                        <img src="http://cesarmaq.com.br/wp-content/uploads/2017/07/guindaste-hidraulico-telescopico-traseiro-lm130tm-br.jpg" alt="Guindaste hidráulico telescópico traseiro LN 130TM BR" class="img-responsive">

                    </div>
                    <div class="col-md-4 col-xs-12">
                        <section class="sidebar-equipamento">
                            <div class="info-equipamentos">
                                <ul>
                                    <li><i class="fa fa-cubes" aria-hidden="true"></i><span>Capacidade máxima: 26 t</span></li>


                                    <li><i class="fa fa-arrow-up" aria-hidden="true"></i> <span>Altura máxima de elevação da lança telescópica: 19 m</span></li>

                                    <li><i class="fa fa-arrow-up" aria-hidden="true"></i> <span>Altura máxima de elevação lança telescópica + JIB: 40</span></li>

                                    <li><i class="fa fa-arrow-up" aria-hidden="true"></i> <span>JIB: 50</span></li>

                                    <li><i class="fa fa-level-up" aria-hidden="true"></i> <span>Garfo: 60</span></li>

                                    <li><i class="fa fa-exchange" aria-hidden="true"></i> <span>Sapatas estendidas centro a centro: 70</span></li>

                                    <li><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span><a href="#" target="_blank">Ver catálogo em PDF</a></span></li>
                                </ul>
                            </div>

                        </section>
                    </div>
                    <div class="col-md-12">
                        <div class="informacoes_tecnicas">
                            <div>
                                <h3>Tabela de Carga</h3>
                                <figure><img src="http://cesarmaq.com.br/wp-content/uploads/2017/07/tabela-de-carga.jpg" class="img-responsive center-block" alt="Tabela de Carga"></figure>
                            </div>
                            <div>
                                <h3>Gráfico de Carga</h3>
                                <figure><img src="http://cesarmaq.com.br/wp-content/uploads/2017/07/grafico-de-carga.jpg"  class="img-responsive center-block" alt="Gráfico de Carga"></figure>
                            </div>
                            <div>
                                <h3>Dimensões</h3>
                                <figure><img src="http://cesarmaq.com.br/wp-content/uploads/2017/07/dimensoes.jpg" class="img-responsive center-block" alt="Dimensões"></figure>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection