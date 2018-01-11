@extends('site.index')
@section('content')
    <!-- banner1 -->

    <div class="services-breadcrumb">
        <div class="container">
            <ul>
                <li><a href="{{url('/')}}">Home</a><i>|</i></li>
                <li>Contato</li>
            </ul>
        </div>
    </div>

    <!-- //banner1 -->

    <!-- mail -->
    <div class="mail">
        <div class="container">
            <h3>Contato</h3>
            <p class="quia">Localização</p>

            <div class="w3ls_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.4163654005356!2d-47.940715785087875!3d-19.779936286687988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bad00c87d80f3d%3A0x81c7ca81d93518ea!2sR.+Jos%C3%A9+Carlos+Rodrigues+da+Cunha%2C+621+-+Recreio+dos+Bandeirantes%2C+Uberaba+-+MG%2C+38040-620!5e0!3m2!1spt-BR!2sbr!4v1487122528857"  style="border:0"></iframe>

            </div>
            <div class="col-md-4 wthree_contact_left">
                <h4>Endereço</h4>
                <p>Rua José Carlos Rodrigues da Cunha, 621
                    <span> - Recreio dos Bandeirantes, Uberaba - MG, 38040-620</span></p>
                <ul>
                    <li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> Telefone :(34) 3322-6022</li>
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:administrativo@pwtransforte.com.br">administrativo@pwtransforte.com.br</a></li>
                </ul>
            </div>
            <div class="col-md-8 wthree_contact_left">
                <h4>Formulário contato</h4>
                <form action="#" method="post">
                    <div class="col-md-6 wthree_contact_left_grid">
                        <input type="text" name="Name" value="Nome*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nome*';}" required="">
                        <input type="email" name="Email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}" required="">
                    </div>
                    <div class="col-md-6 wthree_contact_left_grid">
                        <input type="text" name="Telephone" value="Telefone*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telefone*';}" required="">
                        <input type="text" name="Subject" value="Assunto*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Assunto*';}" required="">
                    </div>
                    <div class="clearfix"> </div>
                    <textarea  name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Mensagem...</textarea>
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpar">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //mail -->

@endsection