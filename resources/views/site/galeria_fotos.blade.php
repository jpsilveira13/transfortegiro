@extends('site.index')
@section('css-lightbox')

    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet" type="text/css" media="all" />

@endsection
@section('js-lightbox')
    <script type="text/javascript" src="{{asset('js/lightbox.js')}}"></script>
@endsection
@section('content')
    <!-- banner1 -->
    <div class="services-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{url('/')}}">Home</a><i>|</i></li>
                <li>Galeria de Fotos</li>
            </ul>
        </div>
    </div>
    <!-- //banner1 -->

    <!-- mail -->
    <div class="mail">
        <div class="container">
            <h3>Galeria</h3>
            <p class="quia">Imagens Transforte</p>
            @php
                $path =  public_path().'/images/galeria';
                        $diretorio = dir($path);
                        while($arquivo = $diretorio->read()){
                        if($arquivo != "." && $arquivo != ".."){

                        echo '<div  class="col-lg-4 col-sm-6 col-xs-12"><a data-lightbox="roadtrip" title="Imagens Transforte Giro" href="images/galeria/'.$arquivo.'">
                        <img class="thumbnail img-responsive" src="images/galeria/'.$arquivo.'"></a></div>';
                        }
            }
            @endphp


            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //mail -->

@endsection

<script>
    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true
    })
</script>
