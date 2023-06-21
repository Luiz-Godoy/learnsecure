@extends('layouts.main')

@section('options')
    <div class="accordion-body">
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('introducao')}}">
            <img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                style="width: 18px; height: 18px; vertical-align: middle;" />Introdução ao
            Conhecimento</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('dados_p')}}">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais</p>
        </a>
        <a style="text-decoration: none;">
            <!-- Possivelmente retirar o href -->
            <p class="highlighted"><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais
                Sensíveis</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais Anonimizados</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Tratamento de Dados</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Agentes de Tratamento</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Segurança e Sigilo dos Dados</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Sanções</p>
        </a> <br>
        <a class="hover-effect" style="text-decoration: none;">
            <p><img src="https://img.icons8.com/?size=512&id=oGYlTvbCpofj&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Quiz</p>
        </a>
    </div>
@endsection

@section('content')
    <div class="container my-5 block">
        <div class="bg-body-tertiary p-5 rounded">
            <div class="col-sm-8 py-5 mx-auto">
                <div class="card-header-conteudo"></div>
                <h1 class="display-5 fw-normal">Dados Pessoais Sensíveis</h1>
            </div>
            <div id="imagens">
                <br>
                <img src="../img/dados_pessoais_sensiveis.png" class="d-block w-100 rounded rounded-3">
                <br>
            </div>
            <br>
            <br>

            <p class="fs-5">De acordo com a Seção I, o processamento de informações pessoais deve seguir um conjunto de
                princípios, incluindo, entre outros, finalidade, necessidade, adequação, transparência e segurança.
            </p>

            {{--  <!--Alterar-->  --}}

            <p> Os dados pessoais sensíveis são uma lista especial de informações pessoais, mais protegidas pela lei. Esses
                dados são naturalmente mais íntimos, e, muitas vezes, podem causar discriminação. Estamos falando de: Origem
                racial ou étnica;
                Convicção religiosa;
                Opinião política;
                Filiação a sindicato;
                Filiação religiosa, filosófica
                ou política;
                Dado de saúde;
                Dado referente à vida sexual;
                Dado genético e Dado biométrico.</p>

            <p> É possível que alguma informação, mesmo que não seja diretamente parte dessa lista, nos permita saber uma
                informação sensível de alguém. Por exemplo, se eu sei que uma pessoa faz uma dieta especial e reserva certos
                períodos da semana sem sair de casa, é possível que ela seja de determinada religião. </p>

            <p> <strong> Importante: nossas informações financeiras devem ser sempre protegidas, mas elas não são
                    sensíveis.</strong> </p>

            <p> Por isso, a LGPD estabelece que o tratamento de dados pessoais sensíveis só pode ocorrer em situações
                específicas, como quando há consentimento expresso do titular dos dados, para cumprimento de obrigação legal
                ou regulatória, para a proteção da vida ou da incolumidade física do titular ou de terceiro, entre outras.
            </p>

            <div class="img_conteudo">
                <img src="../img/Personal data-rafiki.png" class="img-fluid" width="100%" height="100%">
            </div>

            <p>Em resumo, é importante entender que os dados pessoais sensíveis são uma categoria especial de dados pessoais
                que requerem proteção ainda mais rigorosa, a fim de garantir a privacidade e a dignidade das pessoas. O
                tratamento desses dados deve ser realizado com cuidado e em conformidade com a legislação aplicável, para
                evitar qualquer tipo de discriminação ou preconceito.</p> <br>

            <div>
                <a href="{{ route('dados_a') }}"><button class="btn btn-success rounded-pill px-3"
                        type="button">Concluído</button></a>
            </div>
        </div>
    </div>
@endsection
