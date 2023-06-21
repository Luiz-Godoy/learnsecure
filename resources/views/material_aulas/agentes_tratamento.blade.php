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
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('dados_s')}}">
            <!-- Possivelmente retirar o href -->
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais Sensíveis</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('dados_a')}}">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais Anonimizados</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('tratamento')}}">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Tratamento de Dados</p>
        </a>
        <a style="text-decoration: none;">
            <p class="highlighted"><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Agentes de
                Tratamento</p>
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
                <h1 class="display-5 fw-normal">Agentes de Tratamento</h1>
            </div>
            <div id="imagens">
                <br>
                <img src="../img/agentes_tratamento.png" class="d-block w-100 rounded rounded-3">
                <br>
            </div>
            <br>
            <br>

            <p class="fs-5">De acordo com a Seção I, o processamento de informações pessoais deve seguir um conjunto de
                princípios, incluindo, entre outros, finalidade, necessidade, adequação, transparência e segurança.
            </p>
            <!--Alterar-->

            <p>Os agentes de tratamento são as pessoas físicas ou jurídicas que realizam o tratamento de dados pessoais,
                seja em nome próprio ou em nome de terceiros. Na Lei Geral de Proteção de Dados (LGPD), os agentes de
                tratamento são divididos em três categorias: o controlador, o operador e o encarregado.
            </p>

            <p>No artigo 5º explica:</p>

            <p>VI - controlador: pessoa natural ou jurídica, de direito público ou privado, a quem competem as deicões
                referentes ao tratamento de dados pessoais; </p>

            <p> VII - operador: pessoa natural ou jurídica, de diretio público ou privado, que realiza o tratamento de dados
                pessoais em nome do controlador;
            </p>

            <p>VIII - encarregado: pessoa indicada pelo controlador para atuar como canal de comunicação entre o
                controlador, os titulares dos dados e a Autoridade Nacional de Proteção de Dados;
            </p>

            <p> IX - agentes de tratamento: o controlador e o operador.</p> <br>

            <p>Por fim, o encarregado é a pessoa indicada pelo controlador para atuar como canal de comunicação entre a
                organização e os titulares dos dados pessoais, bem como com a Autoridade Nacional de Proteção de Dados
                (ANPD).
                O encarregado é responsável por receber e encaminhar as demandas dos titulares dos dados, bem como orientar
                a
                organização quanto às suas obrigações e deveres referentes à proteção de dados.</p>

            <p>É importante destacar que, independentemente da categoria em que se enquadrem, todos os agentes de tratamento
                são responsáveis pelo cumprimento das normas e leis de proteção de dados. Eles devem adotar medidas técnicas
                e
                organizacionais adequadas para garantir a segurança, a privacidade e a integridade dos dados pessoais, bem
                como manter registros das operações de tratamento realizadas.
            </p>

            <div class="img_conteudo">
                <img src="../img/Secure data-amico.png" class="img-fluid" width="100%" height="100%">
            </div>

            <br>

            <div>
                <a href="{{ route('seguranca')}}"><button class="btn btn-success rounded-pill px-3"
                        type="button">Concluído</button></a>
            </div>
        </div>
    </div>
@endsection
