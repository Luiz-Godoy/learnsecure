@extends('layouts.main')

@section('options')
    <div class="accordion-body">
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('introducao')}}">
            <img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
              style="width: 18px; height: 18px; vertical-align: middle;" />Introdução ao Conhecimento
            </p>
          </a>
          <a class="hover-effect" style="text-decoration: none;" href="{{ route('dados_p')}}">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais</p>
          </a>
          <a class="hover-effect" style="text-decoration: none;" href="{{ route('dados_s')}}">
            <!-- Possivelmente retirar o href -->
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais Sensíveis</p>
          </a>
          <a style="text-decoration: none;">
            <p class="highlighted"><img src="https://img.icons8.com/?size=32&id=1395&format=png"
                class="img-with-margin" style="width: 18px; height: 18px; vertical-align: left;" />Dados Pessoais
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
                <h1 class="display-5 fw-normal">Dados Pessoais Anonimizados</h1>
            </div>
            <div id="imagens">
                <br>
                <img src="../img/dados_anonimizados.png" class="d-block w-100 rounded rounded-3">
                <br>
            </div>
            <br>
            <br>

            <p class="fs-5">De acordo com a Seção I, o processamento de informações pessoais deve seguir um conjunto de
                princípios, incluindo, entre outros, finalidade, necessidade, adequação, transparência e segurança.
            </p>
            <!--Alterar-->

            <p> Quando falamos em dados pessoais anonimizados, estamos nos referindo a informações que foram tornadas
                irreversivelmente anônimas, de modo que não seja possível identificar a pessoa a quem esses dados se
                referem.
            </p>

            <p>Em outras palavras, o processo de anonimização consiste em transformar dados pessoais em dados não pessoais,
                eliminando todas as informações que possam permitir a identificação do titular dos dados, como nome, CPF,
                RG,
                endereço, entre outros.
            </p>

            <p>Dessa forma, o dado torna-se dissociado da pessoa a quem se referia, perdendo o caráter de dado pessoal e
                deixando de ser protegido pela LGPD. </p>

            <p> Vale ressaltar que a anonimização dos dados é uma técnica que pode ser utilizada para fins de pesquisa e
                desenvolvimento de produtos e serviços, desde que não sejam utilizados dados pessoais sensíveis ou que
                possam
                gerar riscos à privacidade ou à proteção de dados pessoais.</p>

            <p>No entanto, é importante lembrar que a anonimização não pode ser realizada de forma arbitrária ou sem
                critérios claros, sob pena de violação à LGPD. É necessário que seja adotado um processo de anonimização que
                preserve a segurança e a privacidade dos dados pessoais.</p>

            <p> É importante ressaltar que a anonimização é uma técnica que pode ser utilizada para proteger a privacidade
                dos titulares dos dados, permitindo que as informações sejam utilizadas para fins estatísticos, de pesquisa
                e
                de desenvolvimento de novos produtos e serviços, sem comprometer a privacidade e a segurança dos dados
                pessoais.</p>

            <p>É fundamental que as organizações que utilizam dados pessoais realizem um estudo prévio para verificar a
                possibilidade de anonimização, garantindo que as informações tornem-se dissociadas do titular dos dados.</p>

            <div class="img_conteudo">
                <img src="../img/Personal data-pana.png" class="img-fluid" width="100%" height="100%">
            </div>

            <p>Vale lembrar que a anonimização não é uma garantia absoluta de proteção de dados pessoais, uma vez que é
                possível reidentificar uma pessoa a partir de dados que aparentemente estavam anonimizados. Portanto, é
                importante que as organizações adotem medidas de segurança complementares para evitar que os dados
                anonimizados possam ser revertidos.
            </p> <br>

            <div>
                <a href="{{ route('tratamento') }}"><button class="btn btn-success rounded-pill px-3"
                        type="button">Concluído</button></a>
            </div>
        </div>
    </div>
@endsection
