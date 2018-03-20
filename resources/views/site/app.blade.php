@extends('site.index')
@section('content')
    <!-- banner -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{url('images/banner3.jpg')}}" class="center-block">
                <div class="carousel-caption">

                    <div class="w3ls_banner_info">
                        <h2>Guindastes</h2>
                        <p class="hidden-xs hidden-md">A Transforte Locações Uberaba oferece locação de guindastes hidráulico-telescópicos de modelo 6.500 ao 42.000 com capacidade de 3 toneladas até 30 toneladas.</p>
                        <div class="wthree_more">
                            <a href="{{url('servicos')}}" class="button--wayra button--border-thick button--text-upper button--size-s">Saiba Mais</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="item">
                <img src="{{url('images/banner1.jpg')}}" class="center-block">
                <div class="carousel-caption">

                    <div class="w3ls_banner_info">
                        <h2>Guindastes</h2>
                        <p class="hidden-md hidden-xs">A Transforte Locações Uberaba oferece locação de guindastes hidráulico-telescópicos de modelo 6.500 ao 42.000 com capacidade de 3 toneladas até 30 toneladas.</p>
                        <div class="wthree_more">
                            <a href="{{url('servicos')}}" class="button--wayra button--border-thick button--text-upper button--size-s">Saiba mais</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="item">
                <img src="{{url('images/banner4.jpg')}}" class="center-block">
                <div class="carousel-caption">

                    <div class="w3ls_banner_info">
                        <h2>Muncks</h2>
                        <p class="hidden-md hidden-xs">A Transforte é uma empresa especializada em locação e serviços de transporte com utilização de equipamentos guindauto (Munck).</p>
                        <div class="wthree_more">
                            <a href="{{url('servicos')}}" class="button--wayra button--border-thick button--text-upper button--size-s">Saiba mais</a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="item">
                <img src="{{url('images/banner2.jpg')}}"class="center-block">
                <div class="carousel-caption">

                    <div class="w3ls_banner_info">
                        <h2>Caçambas</h2>
                        <p class="hidden-xs hidden-md">A Transforte realiza serviços de locação de Caçambas comerciais e residenciais.Contamos com uma equipe de profissionais treinados e aptos a atender todas as exigências do mercado de remoção de entulho com caçamba estacionária.</p>
                        <div class="wthree_more">
                            <a href="{{url('servicos')}}" class="button--wayra button--border-thick button--text-upper button--size-s">Saiba mais</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>
    <!-- //banner -->

    <!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <div class="col-md-6 banner_bottom_left">
                <h3>Porque escolher a Transforte?</h3>
                <p>A Transforte é uma empresa que se mantém atenta às inovações tecnológicas que surgem no mercado nacional, para que possa oferecer aos seus clientes, sempre soluções inovadoras e de melhor desempenho. Com uma infra-estrutura física e operacional seguindo os padrões mais avançados e com profissionais altamente qualificados alinhados com as normas de segurança e qualidade vigentes para garantia do melhor resultado. Transforte é uma empresa completa que busca sempre com a melhor qualidade e preço atender com excelência os nossos clientes, a razão e foco de um sucesso mútuo.
                </p>

            </div>
            <div class="col-md-6 banner_bottom_right">
                <div class="wthree_banner_bottom_right_grids">
                    <div class="col-md-6 banner_bottom_right_grid">
                        <div class="view view-tenth">
                            <div class="agile_text_box">
                                <i></i>
                                <h3>Segurança</h3>
                                <p>Prezamos por trabalhar com segurança e qualidade.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 banner_bottom_right_grid">
                        <div class="view view-tenth">
                            <div class="agile_text_box">
                                <i class="men"></i>
                                <h3>Serviço de suporte</h3>
                                <p>Executamos uma visita prévia para avaliação e estudo do serviço.</p>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="wthree_banner_bottom_right_grids">
                    <div class="col-md-6 banner_bottom_right_grid">
                        <div class="view view-tenth">
                            <div class="agile_text_box">
                                <i class="shipping"></i>
                                <h3>Agilidez na execução</h3>
                                <p>Trabalhando com agendamento com os parceiros.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6 banner_bottom_right_grid">
                        <div class="view view-tenth">
                            <div class="agile_text_box">
                                <i class="clock"></i>
                                <h3>Otimização de tempo</h3>
                                <p>Nos tempos atuais o tempo de execução e prestação de serviços é um destaque primordial.</p>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- banner-bottom -->
    <div class="tempo-anos">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <img class="center-block" src="{{url('images/selo-comemoracao.png')}}" alt="Selo 25 anos">
                </div>
            </div>
        </div>
    </div>
    <!-- banner-bottom1 -->
    <div class="banner-bottom1">
        <div class="col-md-6 agile_banner_bottom1_left">
            <img src="{{url('images/imagem-principal1.jpg')}}" alt=" " class="img-responsive" />
        </div>
        <div class="col-md-6 agile_banner_bottom1_right">
            <h3>Há 25 anos no mercado para atender melhor</h3>
            <p>Com a sua fundação no ano de 1992, a Transforte vem ao longo desses anos se solidificando no ramo de transporte, distribuição e logística.Oferecendo serviços especializados de locação de Caçamba, Caminhão Munck e Guindastes. Através de métodos próprios e eficazes de remoção, movimentação, transporte de máquinas e também para serviços de diversos pesos e volumes. Contamos com uma equipe de profissionais qualificados, prestando serviços aos nossos clientes e parceiros com excelência em atendimento, proporcionando assim, maior segurança, informação e confiabilidade...</p>
            <div class="details">
                <a href="{{url('sobre')}}">Saiba mais</a>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- banner-bottom1 -->

    <!-- testimonials -->
    <div class="testimonials">
        <div class="container">
            <h3>Parceiros</h3>
            <p class="quia">Veja alguns de nossos parceiros</p>
            <div class="w3_testimonials_grids">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="w3_testimonials_grid">
                                    <img src="images/parceiros/parceiro-vale.jpg" alt=" " class="img-responsive" />
                                    <p>Vale Fertilizantes</p>
                                </div>
                            </li>

                            <li>
                                <div class="w3_testimonials_grid">
                                    <img src="images/parceiros/parceiro-delta.jpg" alt=" " class="img-responsive" />

                                    <p>Delta Sucroenergia</p>
                                </div>
                            </li>
                            <li>
                                <div class="w3_testimonials_grid">
                                    <img src="images/parceiros/parceiro-henrige.jpg" alt=" " class="img-responsive" />


                                    <p>Fertilizantes Heringe</p>
                                </div>
                            </li>
                            <li>
                                <div class="w3_testimonials_grid">
                                    <img src="images/parceiros/parceiro-mrv.jpg" alt=" " class="img-responsive" />
                                    <p>MRV</p>
                                </div>
                            </li>
                            <li>
                                <div class="w3_testimonials_grid">
                                    <img src="images/parceiros/parceiro-ourofino.jpg" alt=" " class="img-responsive" />
                                    <p>Ourofino</p>
                                </div>
                            </li>
                            <li>
                                <div class="w3_testimonials_grid">
                                    <img src="images/parceiros/parceiro-seara.jpg" alt=" " class="img-responsive" />

                                    <p>Seara</p>
                                </div>
                            </li>
                            <li>
                                <div class="w3_testimonials_grid">
                                    <img src="images/parceiros/parceiro-senai.jpg" alt=" " class="img-responsive" />

                                    <p>Senai</p>
                                </div>
                            </li>
                            <li>
                                <div class="w3_testimonials_grid">
                                    <img src="images/parceiros/parceiro-uberaba.jpg" alt=" " class="img-responsive" />
                                    <p>Prefeitura Uberaba</p>
                                </div>
                            </li>
                            <li>
                                <div class="w3_testimonials_grid">
                                    <img src="images/parceiros/parceiro-abcz.jpg" alt=" " class="img-responsive" />

                                    <p>ABCZ</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- //testimonials -->
    <!-- footer -->

@endsection