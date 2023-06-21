@extends('layouts.main')

@section('options')
    <div class="accordion-body">
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('introducao')}}">
            <img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
              style="width: 18px; height: 18px; vertical-align: middle;" />Introdução ao Conhecimento
            </p>
          </a>
          <a style="text-decoration: none;">
            <p class="highlighted"><img src="https://img.icons8.com/?size=32&id=1395&format=png"
                class="img-with-margin" style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais
            </p>
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

@section("content")
    <div class="container my-5 block">
        <div class="bg-body-tertiary p-5 rounded">
            <div class="col-sm-8 py-5 mx-auto">
                <div class="card-header-conteudo"></div>
                <h1 class="display-5 fw-normal">Dados Pessoais</h1>
            </div>
            <br>
            <div id="imagens">
                <br>
                <img src="../img/Data_security.png" class="d-block w-100 rounded rounded-3">
                <br>
            </div>
            <br>
            <br>

            <p class="fs-5">De acordo com a Seção I, o processamento de informações pessoais deve seguir um conjunto de
                princípios, incluindo, entre outros, finalidade, necessidade, adequação, transparência e segurança.
            </p>
            {{--  <!--Alterar-->  --}}

            <p> Dados pessoais são todas as informações que se referem a uma pessoa física identificada ou identificável. Ou
                seja, são informações que permitem identificar direta ou indiretamente uma pessoa, como nome, CPF, RG,
                endereço, e-mail, telefone,
                entre outros.</p>

            <p> O tratamento de dados pessoais, por sua vez, consiste em qualquer operação realizada com esses dados, como
                coleta, armazenamento, uso, compartilhamento, entre outros. Para que uma empresa possa tratar os dados
                pessoais de uma pessoa, é
                necessário que ela obtenha o consentimento do titular dos dados. </p>

            <p> A LGPD estabelece que as empresas devem adotar medidas de segurança adequadas para proteger os dados
                pessoais. Isso inclui medidas organizacionais, como a implementação de políticas e procedimentos internos,
                bem
                como medidas técnicas,
                como a criptografia, o controle de acesso, a identificação de vulnerabilidades e a realização de auditorias
                periódicas. </p>

            <p> Caso ocorra algum incidente de segurança que comprometa a privacidade dos dados pessoais, a empresa deve
                comunicar o incidente aos titulares dos dados e à Autoridade Nacional de Proteção de Dados (ANPD) em um
                prazo
                razoável, conforme definido
                pela LGPD.</p>

            <p>Outro conceito importante na LGPD é o de controlador e operador. O controlador é a pessoa física ou jurídica
                responsável pelas decisões referentes ao tratamento de dados pessoais, como a finalidade, os meios e os
                destinatários do tratamento.
                Já o operador é a pessoa física ou jurídica que realiza o tratamento de dados pessoais em nome do
                controlador.
            </p>

            <div class="img_conteudo">
                <img src="../img/Hacker-amico.png" class="img-fluid" width="100%" height="100%">
            </div>

            <p>Por fim, a LGPD também estabelece que os titulares dos dados têm o direito de apresentar uma reclamação à
                ANPD em caso de violação de seus direitos. A ANPD é a autoridade responsável por fiscalizar e aplicar
                sanções
                em caso de violações
                à LGPD.</p> <br>

            <div>
                <a href="{{ route('dados_s')}}"><button class="btn btn-success rounded-pill px-3"
                        type="button">Concluído</button></a>
            </div>
        </div>
    </div>

@endsection
