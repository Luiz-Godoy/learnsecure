@extends('layouts.app')

@section('content')
    <main class="d-flex flex-nowrap card-main">
        <div class="container my-5">
            <div class="bg-body-tertiary p-5 rounded">
                <div class="col-sm-8 py-5 mx-auto">
                    <br>
                    <h1>QUIZ</h1>
                    <br>
                    <div class="progress">
                        <div class="progress-bar" id="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                    <div class="card-barra-progresso">
                        <div class="card-header-pegunnta" id="pergunta">
                            <h1 class="display-5 fw-normal"></h1>
                            <div class="block question-container" id="question-1">
                                <h2>Questão 1</h2>
                                <!-- conteúdo da pergunta -->
                                <h3>Quem é o responsável por tomar as decisões referentes ao tratamento de dados pessoais?
                                </h3>
                                <ul class="ul">
                                    <li class="li">
                                        <input type="radio" id="1-option" name="selector" onclick="enableNextButton()">
                                        <label for="1-option">ANPD</label>

                                        <div class="check"></div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="2-option" name="selector" onclick="enableNextButton()">
                                        <label for="2-option">Operador</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="3-option" name="selector" onclick="enableNextButton()">
                                        <label for="3-option">Controlador</label>
                                        <!--Resposta certa-->
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="4-option" name="selector" onclick="enableNextButton()">
                                        <label for="4-option">Encarregado</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block question-container" id="question-2">
                                <h2>Questão 2</h2>
                                <!-- conteúdo da pergunta -->
                                <h3>Em caso de incidente de segurança que possa comprometer os dados pessoais, o
                                    controlador ou operador deve comunicar imediatamente qual órgão?</h3>
                                <ul class="ul">
                                    <li class="li">
                                        <input type="radio" id="5-option" name="selector" onclick="enableNextButton()">
                                        <label for="5-option"> Ministério da Justiça </label>
                                        <div class="check"></div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="6-option" name="selector" onclick="enableNextButton()">
                                        <label for="6-option">Polícia Federal</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="7-option" name="selector" onclick="enableNextButton()">
                                        <label for="7-option">ANPD</label>
                                        <!-- Resposta correta -->
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="8-option" name="selector" onclick="enableNextButton()">
                                        <label for="8-option">Receita Federal</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block question-container" id="question-3">
                                <h2>Questão 3</h2>
                                <!-- conteúdo da pergunta -->
                                <h3>O que deve ser feito em caso de incidente de segurança que possa comprometer a
                                    privacidade ou a
                                    integridade dos dados pessoais?</h3>
                                <ul class="ul">
                                    <li class="li">
                                        <input type="radio" id="9-option" name="selector" onclick="enableNextButton()">
                                        <label for="9-option">O controlador não precisa fazer nada, pois não é responsável
                                            por incidentes de
                                            segurança</label>

                                        <div class="check"></div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="10-option" name="selector" onclick="enableNextButton()">
                                        <label for="10-option">O controlador deve comunicar imediatamente aos titulares dos
                                            dados
                                            afetados</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="11-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="11-option">O controlador deve comunicar imediatamente a ANPD e aos
                                            titulares dos dados
                                            afetados</label>
                                        <!-- Resposta correta -->
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="12-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="12-option">O controlador deve apagar os dados pessoais afetados pelo
                                            incidente</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block question-container" id="question-4">
                                <h2>Questão 4</h2>
                                <!-- conteúdo da pergunta -->
                                <h3>Qual é o princípio fundamental da LGPD relacionado à segurança dos dados pessoais?</h3>
                                <ul class="ul">
                                    <li class="li">
                                        <input type="radio" id="13-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="13-option">Proporcionalidade</label>

                                        <div class="check"></div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="14-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="14-option"> Finalidade</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="15-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="15-option">Consentimento</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="16-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="16-option">Confidencialidade</label>
                                        <!-- Resposta Correta -->
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block question-container" id="question-5">
                                <h2>Questão 5</h2>
                                <!-- conteúdo da pergunta -->
                                <h3>Qual é a penalidade máxima de multa prevista pela LGPD por infração às suas disposições?
                                </h3>
                                <ul class="ul">
                                    <li class="li">
                                        <input type="radio" id="17-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="17-option">2% do faturamento bruto da pessoa jurídica, limitado a R$ 50
                                            milhões por
                                            infração</label>

                                        <div class="check"></div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="18-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="18-option">4% do faturamento bruto da pessoa jurídica, limitado a R$ 50
                                            milhões por
                                            infração</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="19-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="19-option">2% do faturamento bruto da pessoa jurídica, limitado a R$
                                            100 milhões por
                                            infração</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="20-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="20-option">4% do faturamento bruto da pessoa jurídica, limitado a R$
                                            100 milhões por
                                            infração</label>
                                        <!-- Resposta Correta -->
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class=" block question-container" id="question-5">
                                <h2>Questão 6</h2>
                                <!-- conteúdo da pergunta -->
                                <h3>De acordo com a LGPD, os dados pessoais anonimizados são considerados dados pessoais?
                                </h3>
                                <ul class="ul">
                                    <li class="li">
                                        <input type="radio" id="21-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="21-option">Sim, pois é possível reidentificar os indivíduos</label>

                                        <div class="check"></div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="22-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="22-option">Sim, pois ainda podem ser utilizados para identificar os
                                            titulares</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="23-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="23-option"> Não, pois não é possível identificar os titulares</label>
                                        <!-- Resposta Correta -->
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="24-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="24-option"> Não, pois a anonimização torna os dados
                                            irrecuperáveis</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block question-container" id="question-5">
                                <h2>Questão 7</h2>
                                <!-- conteúdo da pergunta -->
                                <h3>O que o Capítulo VII da LGPD trata?</h3>
                                <ul class="ul">
                                    <li class="li">
                                        <input type="radio" id="25-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="25-option">Das medidas de segurança e sigilo de dados pessoais</label>
                                        <!-- Resposta correta -->
                                        <div class="check"></div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="26-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="26-option">Dos requisitos para o tratamento de dados pessoais</label>
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="27-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="27-option"> Do tratamento de dados pessoais sensíveis</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="28-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="28-option">Do término do tratamento de dados pessoais</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block question-container" id="question-5">
                                <h2>Questão 8</h2>
                                <!-- conteúdo da pergunta -->
                                <h3>O que é permitido pela LGPD em relação à realização de atividades de tratamento de
                                    dados?</h3>
                                <ul class="ul">
                                    <li class="li">
                                        <input type="radio" id="29-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="29-option">A realização de atividades de tratamento de dados sem
                                            contrato de prestação
                                            de
                                            serviços</label>

                                        <div class="check"></div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="30-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="30-option">A realização de atividades de tratamento de dados sem a
                                            garantia da proteção
                                            dos dados pessoais</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="31-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="31-option">A realização de atividades de tratamento de dados por meio
                                            de contratos de
                                            prestação de serviços</label>
                                        <!-- Resposta Correta -->
                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="32-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="32-option">A realização de atividades de tratamento de dados apenas
                                            pelo
                                            encarregado</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block question-container" id="question-5">
                                <h2>Questão 9</h2>
                                <!-- conteúdo da pergunta -->
                                <h3>Quais são as sanções previstas pela LGPD em caso de descumprimento das disposições sobre
                                    proteção de
                                    dados pessoais?</h3>
                                <ul class="ul">
                                    <li class="li">
                                        <input type="radio" id="33-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="33-option">Advertência e multa</label>
                                        <!-- Resposta Correta -->
                                        <div class="check"></div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="34-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="34-option">Advertência e suspensão temporária das atividades</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="35-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="35-option">Multa e suspensão temporária das atividades</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="36-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="36-option">Multa e bloqueio dos dados pessoais</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="block question-container" id="question-5">
                                <h2>Questão 10</h2>
                                <!-- conteúdo da pergunta -->
                                <h3>Quais são as obrigações do controlador em relação aos dados pessoais anonimizados?</h3>
                                <ul class="ul">
                                    <li class="li">
                                        <input type="radio" id="37-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="37-option">Continuar tratando os dados de forma segura e em
                                            conformidade com a
                                            LGPD</label>
                                        <!-- Resposta Correta -->
                                        <div class="check"></div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="38-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="38-option">Excluir imediatamente os dados, uma vez que estão
                                            anonimizados</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="39-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="39-option"> Realizar a reidentificação dos titulares dos dados sempre
                                            que
                                            necessário</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>

                                    <li class="li">
                                        <input type="radio" id="40-option" name="selector"
                                            onclick="enableNextButton()">
                                        <label for="40-option">Não há obrigações específicas em relação aos dados pessoais
                                            anonimizados</label>

                                        <div class="check">
                                            <div class="inside"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-barra-progresso">
                    <button onclick="disableNextButton()" class="btn btn-primary next-button" id="next-button"
                        type="button" disabled>Proxima Questão</button>
                </div>
            </div>
        </div>
    </main>
    <script src="../assets/js/color-modes.js"></script>
    <script src="../assets/js/quiz/Quiz.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script>
@endsection
