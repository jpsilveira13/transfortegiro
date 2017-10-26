@extends('site.index')
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
    <div class="banner1">
        <div class="container">
        </div>
    </div>

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
            
            @endphp
            @for($i = 0;$i<12;$i++)
                <div class="col-lg-4 col-sm-4 col-xs-6"><a title="Caminhão Munck" href="javascript:void(0)"><img class="thumbnail img-responsive" src="//placehold.it/600x350"></a></div>
            @endfor
            <div tabindex="-1" class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" type="button" data-dismiss="modal">×</button>
                            <p class="modal-title">Heading</p>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-default" data-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //mail -->

@endsection