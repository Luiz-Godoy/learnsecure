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
        <a style="text-decoration: none;">
            <p class="highlighted"><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Tratamento de
                Dados</p>
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
                <h1 class="display-5 fw-normal">Tratamento de Dados</h1>
            </div>
            <div id="imagens">
                <br>
                <img src="../img/tratamento_de_dados.png" class="d-block w-100 rounded rounded-3">
                <br>
            </div>
            <br>
            <br>

            <p class="fs-5">De acordo com a Seção I, o processamento de informações pessoais deve seguir um conjunto de
                princípios, incluindo, entre outros, finalidade, necessidade, adequação, transparência e segurança.
            </p>
            <!--Alterar-->

            <p> O tratamento de dados é o conjunto de operações realizadas com dados pessoais, desde a coleta até a
                eliminação ou anonimização. Essas operações incluem a coleta, o armazenamento, a utilização, o
                compartilhamento, a transferência, a correção, a exclusão e a anonimização de dados pessoais.
            </p>

            <p>Para que o tratamento de dados pessoais seja realizado de forma adequada, é necessário que a organização
                responsável pelo tratamento esteja em conformidade com as normas e leis de proteção de dados vigentes. No
                Brasil, a principal norma que regula o tratamento de dados pessoais é a Lei Geral de Proteção de Dados
                (LGPD).
            </p>

            <p>A LGPD é uma lei que consiste em como podemos tratar os dados pessoais dos usuarios e a sua privacidade </p>

            <p> A LGPD é a Lei Geral de Proteção de Dados Pessoais, que é a LEI nº13.709, de 14 de Agosto de 2018. Que
                determina como os dados dos cidadãos podem ser coletados e tratados, e que prevê punições para
                transgressões.
            </p>

            <p>Ela altera o Marco Civil da Internet de 2014 e é similar a General Data Protection Regulation (GDPR) que está
                em vigor na União Europeia.</p>

            <p>O primeiro artigo da LGPD já trata sobre a forma em que os dados pessoais são tratados, inclusive nos meios
                digitais.</p>

            <p>Conforme o Artigo 3º, ela se aplica a todos os cidadãos brasileiros (pessoas juridicas, fisicas, direito
                público, privado...) independente do meio, do país de sua sede ou do país onde estejam localizados os dados,
                desde que:</p>

            <p> I - a operação de tratamento seja relaizada no território nacional;
                ...
                III - os dados pessoasi objeto do tratamnento tenham sido coletados no território nacional.
            </p>

            <p>No artigo 5º inciso X, ela menciona que o tratamento dela é toda operação realizada com dados pessoais,

                Coleta; Produção; Recepção; Classificação; Utilização; Acesso; Reprodução; Transmissão; Distribuição;
                Processamento; Arquivamento; Armazenamento; Eliminação; Avaliação; Modificação; Comunicação; Transferência;
                Extração.</p>

            <p>Ainda no artigo 5º, ela informa que o Dado Pessoal é toda aquela informação relacionada a pessoa natural
                identificada ou indetificável.</p>

            <div class="img_conteudo">
                <img src="../img/Server-amico.png" class="img-fluid" width="100%" height="100%">
            </div>

            <br>

            <div>
                <a href="{{ route('agentes')}}"><button class="btn btn-success rounded-pill px-3"
                        type="button">Concluído</button></a>
            </div>
        </div>
    </div>
@endsection
