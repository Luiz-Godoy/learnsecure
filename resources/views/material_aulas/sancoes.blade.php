@extends('layouts.main')

@section('options')
    <div class="accordion-body">
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('introducao') }}">
            <img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                style="width: 18px; height: 18px; vertical-align: middle;" />Introdução ao
            Conhecimento</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('dados_p') }}">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('dados_s') }}">
            <!-- Possivelmente retirar o href -->
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais Sensíveis</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('dados_p') }}">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais Anonimizados</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('tratamento') }}">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Tratamento de Dados</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('agentes') }}">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Agentes de Tratamento</p>
        </a>
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('seguranca') }}">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Segurança e Sigilo dos Dados</p>
        </a>
        <a style="text-decoration: none;">
            <p class="highlighted"><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Sanções</p>
        </a>
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
                <h1 class="display-5 fw-normal">Sanções</h1>
            </div>
            <div id="imagens">
                <br>
                <img src="../img/sancoes.png" class="d-block w-100 rounded rounded-3">
                <br>
            </div>
            <br>
            <br>

            <p class="fs-5">De acordo com a Seção I, o processamento de informações pessoais deve seguir um conjunto de
                princípios, incluindo, entre outros, finalidade, necessidade, adequação, transparência e segurança.
            </p>
            <!--Alterar-->

            <p>A área de sanções na Lei Geral de Proteção de Dados (LGPD) refere-se às penalidades administrativas que podem
                ser aplicadas às organizações que descumprem as disposições da lei. Essas sanções têm o objetivo de
                incentivar
                o cumprimento das obrigações de proteção de dados e garantir a efetividade da legislação.
            </p>

            <table>

                <li>Advertência: A advertência é uma medida de caráter educativo, em que a ANPD notifica a organização sobre
                    o
                    descumprimento da lei e orienta quanto às medidas corretivas necessárias. É uma oportunidade para a
                    organização regularizar sua conduta e se adequar às disposições da LGPD.
                </li>

                <li>Multa simples: A multa simples é a penalidade mais comum e pode ser aplicada quando a organização comete
                    infrações de menor gravidade. O valor máximo da multa é de 2% do faturamento da pessoa jurídica de
                    direito
                    privado, grupo ou conglomerado no Brasil no seu último exercício, excluídos os tributos, limitada ao
                    total
                    de R$ 50 milhões por infração</li>

                <li>Multa diária: A multa diária pode ser aplicada quando a organização não cumpre uma determinação da ANPD
                    no
                    prazo estabelecido. Nesse caso, a penalidade é cobrada a cada dia de descumprimento até que a obrigação
                    seja
                    cumprida. O valor máximo da multa diária é de 1% do faturamento da pessoa jurídica de direito privado,
                    grupo
                    ou conglomerado no Brasil no seu último exercício, excluídos os tributos, limitada ao total de R$ 50
                    milhões
                    por infração.</li>

                <li>Publicização da infração: A publicização da infração é uma sanção que implica na divulgação ampla da
                    infração cometida pela organização. Essa publicização pode ser realizada pela ANPD, permitindo que a
                    sociedade tenha conhecimento do descumprimento da lei.</li>
            </table> <br>

            <p>Além das sanções administrativas, é importante destacar que a LGPD também prevê a possibilidade de as pessoas
                afetadas por infrações receberem indenizações por danos materiais ou morais causados.
            </p>

            <p> É essencial que as organizações estejam cientes das sanções previstas na LGPD e adotem as medidas
                necessárias para cumprir as obrigações de proteção de dados. Isso inclui a implementação de políticas e
                procedimentos adequados, a adoção de medidas de segurança eficazes, a realização de avaliações de impacto à
                privacidade, entre outras ações que visem garantir a conformidade com a legislação.
            </p>

            <div class="img_conteudo">
                <img src="../img/Secure data-cuate.png" class="img-fluid" width="100%" height="100%">
            </div>

            <br>

            <div>
                <button onclick="acessar_quiz()" class="btn btn-success rounded-pill px-3" type="button">Concluído</button>
            </div>
        </div>
    </div>
@endsection
