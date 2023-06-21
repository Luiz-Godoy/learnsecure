@extends('layouts.main')

@section('options')
    <div class="accordion-body">
        <a style="text-decoration: none;">
            <p class="highlighted"><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Introdução ao
                Conhecimento
            </p>
        </a>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin icon-alt2"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais</p>
        </a>
        <a class="hover-effect">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais
                Sensíveis</p>
        </a>
        <a class="hover-effect">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais
                Anonimizados</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Tratamento de Dados
            </p>
        </a>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Agentes de Tratamento
            </p>
        </a>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Segurança e Sigilo dos
                Dados</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Sanções</p>
        </a><br>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=512&id=oGYlTvbCpofj&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Quiz</p>
        </a>
        <!-- <p><img src="https://img.icons8.com/?size=512&id=oGYlTvbCpofj&format=png" class="img-with-margin"
        style="width: 18px; height: 18px; vertical-align: middle;" />sdasdas</p> -->
    </div>
@endsection

@section('content')
    <div class="container my-5 block">
        <div class="bg-body-tertiary p-5 rounded">
            <div class="col-sm-8 py-5 mx-auto">
                <div class="card-header-conteudo"></div>
                <h1 class="display-5 fw-normal">Introdução ao Conhecimento</h1>
            </div>
            <br>
            <div id="imagens">
                <br>
                <img src="../img/lgpd-banner.jpg" class="d-block w-100 rounded rounded-3">
                <br>
            </div>
            <br>
            <br>

            <p class="fs-5">A LGPD é uma legislação brasileira que tem como objetivo proteger os dados pessoais dos
                cidadãos, garantindo maior transparência e controle sobre como esses dados são coletados, utilizados e
                armazenados por empresas e organizações.</p>

            <p>Com o avanço das tecnologias e a crescente utilização de dispositivos eletrônicos em nossas vidas, a
                quantidade de dados pessoais que circulam pela internet e outros meios digitais tem aumentado
                significativamente. Esses dados incluem
                informações como nome, endereço, CPF, data de nascimento, e-mail, histórico de compras, entre outros. </p>

            <p>No entanto, o uso indiscriminado desses dados pode trazer prejuízos para os titulares, como a invasão de
                privacidade, o roubo de identidade e o uso indevido das informações pessoais. Para proteger os cidadãos
                brasileiros, a Lei Geral de
                Proteção de Dados (LGPD) foi criada e entrou em vigor em setembro de 2020. </p>

            <p> Essa lei estabelece uma série de regras e requisitos que devem ser seguidos por empresas, órgãos públicos e
                outras organizações que tratam dados pessoais. A LGPD tem como objetivo garantir a privacidade e a segurança
                dos dados pessoais
                dos titulares, bem como promover a transparência no tratamento desses dados. </p>

            <div class="img_conteudo">
                <img src="../img/My password-rafiki.png" class="img-fluid" width="100%" height="100%">
            </div>


            <p> Ao longo deste curso, veremos os principais aspectos da LGPD, incluindo os requisitos para o tratamento de
                dados pessoais, o tratamento de dados sensíveis, as obrigações do controlador e do operador, a segurança e o
                sigilo de dados, entre
                outros tópicos importantes. Além disso, serão apresentados casos reais e exemplos práticos para facilitar o
                entendimento e a aplicação da lei na prática.</p>
            <div>
                <br>
                <a href="{{ route('dados_p') }}"> <button class="btn btn-success rounded-pill px-3"
                        type="button">Concluído</button>
                </a>
            </div>
        </div>
    </div>
@endsection
