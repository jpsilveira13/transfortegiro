
<!DOCTYPE html>
<html>
<head>
    <title>Locação Munck, Guindaste e Caçamba - Transforte Giro</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Locação de caçambas, Muncks e Guindastse para movimentação, desova, remoção e içamento de maquinas e peças diversas. Todos os equipamentos passam por manutenções e vist..."/>
    <meta name="language" content="pt-br" />
    <meta name="keywords" content="Transforte Giro, aluguel caçambas uberaba, aluguel muncks uberaba, aluguel guindastes uberaba, obra uberaba, aluguel uberabaa">
    <meta name="robots" content="ALL" />
    <meta name="distribution" content="Global" />
    <meta name="rating" content="General" />
    <meta name="author" content="João Paulo da Silveira" />
    <meta name="Copyright" content="Copyright (c) Transforte Giro"  />
    <!-- tags facebook -->
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Transforte" />
    <meta property="og:description" content="Locação caçambas, Muncks e Guindastes para movimentação, desova, remoção e içamento de máquinas e peças diversas. Todos os equipamentos passam por manutenções e vist..." />
    <meta property="og:url" content="http://www.transfortegiro.com.br/l/" />
    <meta property="og:site_name" content="Transforte" />
    <meta property="og:image" content="{{url('/images/logo-facebook.png')}}" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{asset('css/flexslider.css')}}" type="text/css" media="screen" property="" />
    @yield('css-lightbox')

    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    @yield('equipamento')
    @yield('orcamento')
    <link  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <!-- js -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('images/logo/favicon.ico')}}">
    <link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=190387111301918";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!-- header -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'HvF2W2Tlwk';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->
<div class="header">
    <div class="container">
        <div class="w3l_header_left text-center">
            <ul>
                <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>(34) 3322-6022 / 3312-3106</li>
                <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:administrativo@pwtransforte.com.br">administrativo@pwtransforte.com.br</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>

    </div>
</div>
<div class="logo_nav">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logo">
                    <h1>
                        <a class="navbar-brand logo-transforte" href="{{url('/')}}">
                            <img src="{{url('images//logo/logo-header.png')}}" class="img-responsive">
                        </a>
                    </h1>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="link-effect-2" id="link-effect-2">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{url('/')}}"><span data-hover="Home">Home</span></a></li>
                        <li><a href="{{url('servicos')}}"><span data-hover="Serviços">Serviços</span></a></li>
                        <li class="dropdown">

                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"> Equipamentos <span class="caret"></span></a>
                            <ul class="dropdown-menu">

                                <li><a class="text-center text-uppercase" href="{{route('solo.equipamento',['url_nome' => 'munck'])}}">Munck</a> </li>
                                <li class="divider"></li>
                                <li><a class="text-center text-uppercase" href="{{route('solo.equipamento',['url_nome' =>'guindaste'])}}">Guindaste</a> </li>
                                <li class="divider"></li>
                                <li><a class="text-center text-uppercase" href="{{route('solo.equipamento',['url_nome' => 'cacamba'])}}">Caçamba</a> </li>
                                <li class="divider"></li>
                                <li><a class="text-center text-uppercase" href="{{route('solo.equipamento',['url_nome' => 'plataforma-elevatoria'])}}">Plataforma Elevatória</a> </li>


                            </ul>

                        </li>
                        <li><a href="{{url('sobre')}}"><span data-hover="Sobre">Sobre</span></a></li>
                        <li><a href="{{url('galeria-fotos')}}"><span data-hover="Galeria de Fotos">Galeria de Fotos</span></a></li>
                        <!--<li><a href="#"><span data-h</a> </li> -->
                        <li><a href="{{url('contato')}}"><span data-hover="Contato">Contato</span></a></li>
                    </ul>
                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
@yield('content')
<div class="footer">
    <div class="container">
        <div class="col-md-3 w3agile_footer_grid">

            <h2><img class="img-responsive center-block image-menor" src="{{url('images/logo-rodape.png')}}"/> </h2>
        </div>
        <div class="col-md-2 w3agile_footer_grid">
            <h3>Links</h3>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/servicos')}}">Serviços</a></li>
                <li><a href="{{url('/sobre')}}">Sobre</a></li>
                <li><a href="{{url('/contato')}}">Contato</a></li>
            </ul>
        </div>

        <div class="col-md-7 w3agile_footer_grid">
            <h3>Facebook</h3>
            <div class="fb-page" data-href="https://www.facebook.com/transforteura" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/transforteura" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/transforteura">Transforte</a></blockquote></div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="agileinfo_copy_right">
    <div class="container">
        <div class="agileinfo_copy_right_left">
            <p>© 2017 Transforte. Todos os direitos reservados</p>
        </div>
        <div class="agileinfo_copy_right_right">
            <ul class="social">
                <li><a class="social-linkedin" href="#">
                        <i></i>
                        <div class="tooltip"><span>Facebook</span></div>
                    </a></li>

                <li><a class="social-google" href="#">
                        <i></i>
                        <div class="tooltip"><span>Google+</span></div>
                    </a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>

<!-- //footer -->
<!-- for bootstrap working -->
<script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

<!-- flexSlider -->

<script defer src="{{asset('js/jquery.flexslider.js')}}"></script>
<script type="text/javascript">
    $(window).load(function(){
        $('.flexslider').flexslider({
            animation: "slide",
            animationLoop: false,
            itemWidth: 140,
            itemMargin: 4,
            start: function(slider){
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->
<!-- //js -->
<!-- load-more -->

<script src="{{asset('js/bars.js')}}"></script>
<script src="{{asset('js/counterup.min.js')}}"></script>
<script src="{{asset('js/waypoints.min.js')}}"></script>

@yield('js-lightbox')
<script type="text/javascript" src="{{asset('js/demo.js')}}"></script>
<script>
    $(document).ready(function () {
        size_li = $("#myList li").size();
        x=1;
        $('#myList li:lt('+x+')').show();
        $('#loadMore').click(function () {
            x= (x+1 <= size_li) ? x+1 : size_li;
            $('#myList li:lt('+x+')').show();
        });
        $('#showLess').click(function () {
            x=(x-1<0) ? 1 : x-1;
            $('#myList li').not(':lt('+x+')').hide();
        });
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
@if(!Request::is('/'))
    <script type="text/javascript">
        $('html, body').animate({
            scrollTop: 440}, 2122,'swing');
    </script>
@endif
<!-- //load-more -->

<!-- //for bootstrap working -->

<!-- modal orçamento -->

@if(isset($temOrcamento))
    <div  class="btnOrcamento">
        <a href="#orcamento" data-target="#orcamento" data-toggle="modal" title="Orçamento produto">
            <img src="http://inovarlocacoes.com.br/img/btLigamos.png" border="0" alt="Orçamento" class="transparenciaFracaHover transicaoPadrao float-shadow2" id="btOrcamento">
        </a>
    </div>
    <div class="modal fade in" id="orcamento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                    <h4 class="modal-title" id="myModalLabel">Orçamento do produto {{$equipamento->nome}}!</h4>
                </div>
                <div class="modal-body">
                    <div class="hide-body">
                        <img class="img-responsive center-block borda-image" src="{{url('images/logo/logo-header.png')}}">
                        <hr />
                        <h2 class="titulo-modal">Preencha os formulário</h2>
                    </div>
                    <form id="emailLigamos" class="form-modal" action="">

                        <div class="form-group">
                            <input class="form-control input transicaoPadrao" required type="text" placeholder="Informe seu nome ou da empresa">
                        </div>
                        <div class="form-group">
                            <input class="form-control input transicaoPadrao" required type="text" placeholder="Informe seu telefone de contato">
                        </div>
                        <div class="form-group">
                            <input class="form-control input transicaoPadrao" required type="email" placeholder="Informe seu e-mail">
                        </div>
                        <div class="form-group">
                            <input class="form-control input transicaoPadrao" required type="text" placeholder="Informe seu estado">
                        </div>
                        <div class="form-group">
                            <input class="form-control input transicaoPadrao" required type="text" placeholder="Informe a sua cidade">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control input transicaoPadrao" placeholder="Informe o assunto"></textarea>
                        </div>
                        <div class="text-center">

                            <button id="btnLigar" type="submit" class="transicaoPadrao transparenciaFracaHover float-shadow2">Enviar</button>
                            <div class="labelBotao">Vamos entrar em contato com você </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

</body>
</html>