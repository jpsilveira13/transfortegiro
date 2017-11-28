@extends('site.index')
@section('content')
    <!-- banner1 -->
    <div class="banner1">
        <div class="container">
        </div>
    </div>

    <div class="services-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{url('/')}}">Home</a><i>|</i></li>
                <li>Sobre</li>
            </ul>
        </div>
    </div>
    <!-- //banner1 -->

    <!-- about -->
    <div class="about">
        <div class="container">
            <h3>Sobre</h3>
            <p class="quia">Descrição da Transforte Giro</p>

            <div class="agile_about_grids ">
                <div class="col-md-6 agile_about_grid_left hidden-sm hidden-xs">
                    <div class="col-md-6 agile_about_grid_left1">
                        <img src="{{url('images/image-mini1.jpg')}}" alt=" " class="img-responsive" />
                    </div>
                    <div class="col-md-6 agile_about_grid_left1">
                        <img src="{{url('images/image-mini2.jpg')}}" class="img-responsive" />
                    </div>
                    <div class="clearfix"> </div>
                    <img class="agile_about_grid_left_img img-responsive" src="{{url('images/image-mini3.jpg')}}" alt=" " />
                </div>
                <div class="col-md-6 agile_about_grid_right">
                    <h4>Sobre nós / Apresentação da Empresa</h4>
                    <p><span>Com a sua fundação no ano de 1992, a Transforte</span> vem ao longo desses anos se solidificando no ramo de transporte, distribuição e logística.  Oferecendo serviços especializados de locação de <span>Caçamba, Caminhão Munck e Guindastes</span>. Através de métodos próprios e eficazes de remoção, movimentação, transporte de máquinas e também para serviços de diversos pesos e volumes. Contamos com uma equipe de profissionais qualificados, prestando serviços aos nossos clientes e parceiros com excelência em atendimento, proporcionando assim, maior segurança, informação e confiabilidade. <span>Contamos com uma frota própria, com guindautos de capacidades até 70 toneladas</span>. <span>Nossa especialização são serviços de montagens pré-fabricados, içamentos em geral, remoções, serviços em refinarias, construção civil e eventos diversos</span>. Realizamos um trabalho sério e acima de tudo, com garantia dos serviços prestados, qualidade e dentro do prazo de entrega, com todos nossos veículos com rastreamento  e cargas seguradas.  Respeitando os compromissos assumidos por parte de seus parceiros, a empresa se compromete a fazer com que os produtos cheguem em seus destinos em perfeito estado, valorizando a qualidade e confiança depositada em nós.  </p>

                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about -->
    <!-- about-counter -->
    <div class="about-counter">
        <div class="container">
            <div class="col-md-3 about_counter_left">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
                <p class="counter">25,150</p>
                <h3>Clientes atendidos</h3>
            </div>
            <div class="col-md-3 about_counter_left">
                <i class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></i>
                <p class="counter">54,598</p>
                <h3>Serviços</h3>
            </div>
            <div class="col-md-3 about_counter_left">
                <i class="glyphicon glyphicon-export" aria-hidden="true"></i>
                <p class="counter">83,983</p>
                <h3>Serviços em obra</h3>
            </div>
            <div class="col-md-3 about_counter_left">
                <i class="glyphicon glyphicon-usd" aria-hidden="true"></i>
                <p class="counter">45,894</p>
                <h3>Prestação de serviços</h3>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //about-counter -->
    <!-- about-bottom -->
    <div class="about-bottom">
        <div class="container">
            <div class="w3l_about_bottom_grids">
                <div class="col-md-6 w3l_about_bottom_grid_left">
                    <h3>Missão</h3>
                    <p><b>Estar em constante evolução no nosso mercado, com uma equipe de colaboradores profissionalizados, equipamentos modernos, buscando sempre proporcionar aos nossos clientes soluções para transportes de máquinas e equipamentos, içamentos, movimentações, remoções e trabalho em altura. Ser responsável com o meio ambiente agindo de maneira sustentável.</b></p>

                </div>
                <div class="col-md-6 w3l_about_bottom_grid_left">
                    <h3>Visão</h3>
                    <p><b>Ser uma empresa reconhecida no ramo de Transporte, distribuição e Logística, sendo uma empresa exemplar em qualidade, agilidade, organização e credibilidade, proporcionando total satisfação de nossos parceiros.</b></p>

                </div>


                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //about-bottom -->


@endsection