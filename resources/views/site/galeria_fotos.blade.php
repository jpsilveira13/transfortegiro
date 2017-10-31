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
                        echo '<div  class="col-lg-4 col-sm-4 col-xs-6"><a style="display:block;height: 214px;margin-bottom:5    px" title="Imagens Transforte Giro" href="javascript:void(0)"><img class="thumbnail img-responsive" src="images/galeria/'.$arquivo.'"></a></div>';
}
                        }
            @endphp

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