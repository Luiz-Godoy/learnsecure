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
        <a class="hover-effect" style="text-decoration: none;" href="{{ route('agentes')}}">
            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Agentes de Tratamento</p>
        </a>
        <a style="text-decoration: none;">
            <p class="highlighted"><img src="https://img.icons8.com/?size=32&id=1395&format=png" class="img-with-margin"
                    style="width: 18px; height: 18px; vertical-align: middle;" />Segurança e
                Sigilo dos Dados</p>
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
                <h1 class="display-5 fw-normal">Segurança e Sigilo dos Dados</h1>
            </div>
            <div id="imagens">
                <br>
                <img src="../img/segurança_e_sigilo.png" class="d-block w-100 rounded rounded-3">
                <br>
            </div>
            <br>
            <br>

            <p class="fs-5">De acordo com a Seção I, o processamento de informações pessoais deve seguir um conjunto de
                princípios, incluindo, entre outros, finalidade, necessidade, adequação, transparência e segurança.
            </p>
            <!--Alterar-->

            <p>A segurança e o sigilo dos dados são elementos-chave para garantir a proteção das informações pessoais dos
                indivíduos. Vejamos alguns aspectos importantes relacionados a esses conceitos:
            </p>

            <p><strong>Segurança dos dados:</strong></p>

            <p>A segurança dos dados envolve a implementação de medidas para proteger os dados pessoais contra acessos não
                autorizados, perda, alteração, divulgação ou qualquer forma de tratamento inadequado. Alguns aspectos
                relevantes para a segurança dos dados são:</p>

            <table>

                <li>Criptografia: A criptografia é uma técnica que consiste em transformar os dados em um formato ilegível
                    por
                    meio de algoritmos criptográficos. Somente aqueles que possuem a chave correta podem decifrar os dados.
                    A
                    criptografia é utilizada para proteger a confidencialidade dos dados durante a transmissão ou
                    armazenamento.
                </li>

                <li>Controle de acesso: O controle de acesso garante que somente pessoas autorizadas tenham permissão para
                    acessar os dados pessoais. Isso pode ser realizado por meio de autenticação, como senhas, tokens de
                    segurança ou autenticação de dois fatores, e também pela atribuição de níveis de autorização adequados a
                    cada usuário.</li>

                <li>Proteção física: Além das medidas de segurança eletrônica, é importante proteger fisicamente os
                    ambientes
                    onde os dados estão armazenados. Isso inclui restrição de acesso a servidores e data centers, controle
                    de
                    entrada e saída de pessoas, monitoramento de áreas restritas, entre outros.</li>

                <li>Monitoramento e detecção de incidentes: É fundamental ter sistemas de monitoramento em vigor para
                    identificar atividades suspeitas, tentativas de acesso não autorizado e outras anomalias nos dados. Isso
                    permite uma resposta rápida a incidentes de segurança, minimizando danos e reduzindo o impacto em caso
                    de
                    violação.</li>
            </table> <br>

            <p><strong>Sigilo dos dados:</strong>
            </p>

            <p> O sigilo dos dados refere-se à confidencialidade das informações e é essencial para proteger a privacidade
                dos
                titulares dos dados. Alguns aspectos relevantes para o sigilo dos dados são:
            </p>

            <table>

                <li> Políticas de confidencialidade: É importante estabelecer políticas claras que orientem os funcionários
                    sobre
                    a necessidade de manter o sigilo dos dados. Isso inclui a definição de responsabilidades, a
                    conscientização
                    sobre a importância da privacidade e o cumprimento das obrigações legais.</li>

                <li>Restrição de acesso: O acesso aos dados pessoais deve ser estritamente controlado, limitando-o apenas às
                    pessoas que precisam ter acesso para fins específicos e autorizados. É importante estabelecer controles
                    adequados, como autenticação e autorização, para garantir que apenas indivíduos autorizados possam
                    acessar
                    os
                    dados.</li>

                <li>Confidencialidade nas comunicações: Durante a transmissão de dados pessoais, é essencial proteger sua
                    confidencialidade. O uso de conexões criptografadas, como SSL/TLS, e protocolos seguros de transferência
                    de
                    arquivos, é fundamental para evitar a interceptação ou o acesso não autorizado durante a transmissão dos
                    dados.</li>

                <li>Educação e treinamento: A conscientização dos funcionários é um aspecto crucial para garantir o sigilo
                    dos
                    dados. É importante fornecer treinamentos regulares sobre boas práticas de segurança da informação,
                    destacando
                    a importância do sigilo dos dados pessoais. Os treinamentos devem abordar temas como a identificação de
                    possíveis ameaças, a prevenção de ataques cibernéticos, o uso seguro de senhas, a conscientização sobre
                    phishing e engenharia social, entre outros. Ao educar e capacitar os funcionários, a organização
                    fortalece a
                    cultura de segurança e reduz os riscos de incidentes de segurança.</li>

                <li>Além dos aspectos mencionados, é importante ressaltar que a segurança e o sigilo dos dados exigem uma
                    abordagem abrangente e contínua. As organizações devem implementar políticas e procedimentos de
                    segurança da
                    informação, realizar avaliações regulares de riscos, atualizar e patchear sistemas, monitorar
                    constantemente
                    as atividades de tratamento de dados e garantir a conformidade com as regulamentações aplicáveis.</li>

            </table>

            <div class="img_conteudo">
                <img src="../img/Secure Server-amico.png" class="img-fluid" width="100%" height="100%">
            </div>

            <br>

            <div>
                <a href="{{ route('sancoes')}}"><button class="btn btn-success rounded-pill px-3"
                        type="button">Concluído</button></a>
            </div>
        </div>
    </div>
@endsection
