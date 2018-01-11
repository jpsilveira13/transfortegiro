@extends('site.index')
@section('orcamento')
    <link href="{{asset('css/orcamento.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
    <!-- banner1 -->

    <div class="services-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{url('/')}}">Home</a><i>|</i></li>
                <li>Orçamento<i>|</i></li>
                <li>{{$orcamento->nome}}</li>
            </ul>
        </div>
    </div>

    <!-- //banner1 -->

    <!-- mail -->
    <div class="mail">
        <div class="container">
            <h3>Orçamento</h3>
            <p class="quia">Faça um orçamento para aluguel de máquinas para a sua obra.</p><br> <br>

            <div class="col-md-12 wthree_contact_left">

                <form action="#" method="post">
                    <div class="col-md-6 wthree_contact_left_grid">
                        <input type="text" name="nome" value="Nome*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nome*';}" required="">

                    </div>
                    <div class="col-md-6  wthree_contact_left_grid">
                        <input type="email" name="empresa" value="Empresa*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Empresa*';}" required="">
                    </div>
                    <div class="col-md-4 wthree_contact_left_grid">
                        <input type="text" name="cnpj_cpf" value="CNPJ/CPF*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'CNPJ/CPF*';}" required="">
                    </div>
                    <div class="col-md-4 wthree_contact_left_grid">
                        <input type="text" name="telefone" value="Telefone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telefone*';}" required="">
                    </div>
                    <div class="col-md-4 wthree_contact_left_grid">
                        <input type="text" name="email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
                    </div>
                    <div class="col-md-12 wthree_contact_left_grid">
                        <input type="text" name="obra" value="Local da Obra*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Local da Obra*';}" required="">
                    </div>
                    <div class="clearfix"> </div>
                    <textarea  name="informacoes" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Informações Adicionais...';}" required="">Informações Adicionais...</textarea>
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpar">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //mail -->

@endsection