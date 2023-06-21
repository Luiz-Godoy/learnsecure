<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LearnSecure</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/examples/sidebars/" rel="canonical">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">
    <link href="https://getbootstrap.com/docs/5.3/examples/carousel/" rel="canonical">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/carrousel/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/tela_inicio/tela_inicio.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/color-modes.js') }}"></script>
    <script src="{{ asset('assets/dist/js/tela_inicio/incio.js') }}"></script>
</head>

<body>

    {{--  <!-- Botão modo noturno/modo claro -->  --}}
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>

        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>

        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>

        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle card-button">
        <button class="btn btn-bd py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center drop_item drop_L"
                    data-bs-theme-value="light" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Claro
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>

            <li>
                <button type="button" class="dropdown-item d-flex align-items-center drop_item drop_D"
                    data-bs-theme-value="dark" aria-pressed="false">
                    <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Escuro
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    {{--  <!-- Texto principal/inicial -->  --}}

    <div class="MainContainer">
        <div class="ParallaxContainer">
            <div class="titulo logo-effect" data-bs-theme="dark">
                <img class="img-fluid" src="{{ asset('img/logo_securelearn.png') }}" width="700px">
            </div>

        </div>
        <div class="scroll-down-container">
            <!-- Seta indicando que tem conteúdo abaixo -->
            <div class="scroll-down-arrow set"></div>

        </div>



        <!-- Movimentar o carrousel -->
        <div id="myCarousel" class="carousel slide border border-black border-2 " data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="indicadores active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Texto/conteúdo do carrousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/noticia_1.png" class="d-block w-100 img-fluid" alt="">
                    <svg class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1 style="text-shadow: 2px 2px 4px  rgba(0, 0, 0); color: rgb(255, 255, 255);">Cuidado com
                                seus dados
                                pessoais!</h1>
                            <p style="text-shadow: 2px 2px 4px  rgba(0, 0, 0);">No Brasil, funcionários têm acesso
                                fácil a dados
                                pessoais de clientes</p>
                            <p><a class="btn btn-lg btn_Car"
                                    href="https://www.convergenciadigital.com.br/Seguranca/No-Brasil%2C-funcionarios-tem-acesso-facil-a-dados-pessoais-de-clientes-63128.html"
                                    target="_blank">Leia mais aqui</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../img/noticia_2.png" class="d-block w-100" alt="">
                    <svg vg class="bd-placeholder-img" width="100%" height="100%" aria-hidden="true"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption"
                            style="text-align: left; padding: 10px; color: rgb(255, 255, 255)">
                            <h1 style="text-shadow: 2px 2px 4px rgba(0, 0, 0);">Preste atenção onde você armazena os
                                seus dados!
                            </h1>
                            <p style="text-shadow: 2px 2px 4px rgba(0, 0, 0);">Quase metade dos dados vazados no mundo
                                está no
                                Brasil
                            </p>
                            <p><a class="btn btn-lg btn_Car"
                                    href="https://www.convergenciadigital.com.br/Seguranca/Quase-metade-dos-dados-vazados-no-mundo-esta-no-Brasil-62770.html"
                                    target="_blank">Veja mais</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img src="../img/noticia_3.png" class="d-block w-100" alt="">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="var(--bs-secondary-color)" />
                    </svg>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1 style="text-shadow: 2px 2px 4px  rgba(0, 0, 0);">Ficou sabendo?</h1>
                            <p style="text-shadow: 2px 2px 4px  rgba(0, 0, 0);">OAB é alvo de ataque hacker e paralisa
                                sistemas</p>
                            <p><a class="btn btn-lg btn_Car"
                                    href="https://www.convergenciadigital.com.br/Seguranca/OAB-e-alvo-de-ataque-hacker-e-paralisa-sistemas-62849.html"
                                    target="_blank">Veja mais</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- "Introdução" -->

        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="../img/pc.png"
                        class="d-block mx-lg-auto img-fluid shadow p-3 mb-5 bg-body-tertiary rounded rounded-5"
                        alt="" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Bem-vindo ao nosso site! Aqui, descomplicamos a LGPD
                                e a cyber
                                security para você</font>
                        </font>
                    </h1>
                    <p class="lead">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Aqui, tornamos a proteção de dados acessível a
                                todos. Em um mundo
                                cada vez mais digital, é fundamental entender como manter suas informações pessoais
                                seguras. Nossos
                                guias e dicas práticas ajudarão você a compreender os princípios da LGPD, os riscos
                                cibernéticos e como
                                se proteger online.</font>
                        </font>
                    </p>

                    {{--  Cadastro e login  --}}

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <div class="col">
                            <p><a class="btn btn-primary btn-lg px-4 me-md-2 button-effect"
                                    href="{{ route('register') }}">Faça seu Cadastro
                                    &raquo;</a></p>
                        </div>
                        <div class="col">
                            <p><a class="btn btn-primary btn-lg px-4 me-md-2 button-effect"
                                    href="{{ route('login') }}">Acesse sua Conta
                                    &raquo;</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <br><br>

        <!-- Área de informações -->

        <br><br>
        <div class="container px-4 text-center">
            <div class="row">
                <div class="col border border-dark-subtle border-1 rounded rounded-4 zoom-effect"><br>
                    <div class="img">
                        <img src="../img/prop1.png" class="img-fluid rounded" width="100%" height="100%">
                    </div><br><br><br>
                    <h3 class="text-center">LGPD para iniciantes</h3>
                    <p>Este curso abrange os fundamentos da LGPD e da cyber security de uma forma simples e acessível,
                        projetado
                        especialmente para pessoas leigas no assunto.</p>
                </div>

                <div class="vr"></div>

                <div class="col border border-dark-subtle border-1 rounded rounded-4 zoom-effect"><br>
                    <div class="img">
                        <img src="../img/prop2.png" class="img-fluid rounded" width="100%" height="100%">
                    </div><br><br><br>
                    <h3 class="text-center">Mantendo-se Seguro</h3>
                    <p>O curso oferece um caminho claro para proteger seus dados e informações pessoais. Desde a
                        configuração de
                        senhas fortes até a navegação segura na internet.</p>
                </div>

                <div class="vr"></div>

                <div class="col border border-dark-subtle rounded rounded-4 zoom-effect"><br>
                    <div class="img">
                        <img src="../img/cybersecurity-header.png" class="img-fluid rounded" width="60%"
                            height="60%">
                    </div><br><br>
                    <h2 class="text-center">Certificados</h2>
                    <p>Certificados comprovando sua conclusão e seus conhecimentos da LGPD e da cyber security</p>
                </div>
            </div>
        </div>

        <hr class="featurette-divider" />

        {{--  <!-- Módulos -->  --}}

        {{--  Módulo 1  --}}

        <div class="container marketing" id="modulos">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Modulo 1: <span
                            class="text-body-secondary">Introdução ao
                            conhecimento</span></h2>
                    <p class="lead" Align="justify">Seja o mestre da proteção de dados com nosso módulo de
                        introdução! Aprenda os
                        princípios fundamentais, diretrizes e implicações da Lei Geral de Proteção de Dados em um
                        mergulho profundo no
                        mundo da privacidade. Domine as melhores práticas de conformidade e descubra como proteger
                        informações
                        sensíveis de forma eficaz. Prepare-se para enfrentar o futuro com confiança e segurança. O
                        conhecimento é
                        poder, e a LGPD está ao seu alcance!</p>
                    <p><a class="btn btn-secondary button-effect" href="{{ route('login') }}">Acessar Conteúdo
                            &raquo;</a></p>
                </div>

                <div class="col-md-5 order-md-1">
                    <div class="logo-effect">
                        <img src="../img/tela_1.png" class="img-fluid rounded rounded-4 box">
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br>

        <div class="container marketing ">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Modulo 2: <span class="text-body-secondary">Se
                            desenvolvendo na
                            segurança</span></h2>
                    <p class="lead" Align="justify">Domine a segurança da LGPD e impulsione sua carreira! Aprenda a
                        proteger dados,
                        cumprir exigências legais e se destacar no mercado. Torne-se um especialista em conformidade e
                        esteja
                        preparado para os desafios da era digital. Destaque-se como um profissional confiável e
                        responsável na
                        segurança de dados. Não perca essa oportunidade!</p>
                    <div class="locked-button">
                        <span></span>
                        <a class="btn btn-secondary" disabled>Bloqueado &otimes;</a>
                    </div>
                </div>

                <div class="col-md-5 order-md-1">
                    <div class="logo-effect">
                        <img src="../img/tela_2.png" class="img-fluid rounded rounded-4 box">
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br><br><br>

        <div class="container marketing ">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Modulo 3: <span
                            class="text-body-secondary">Checkmate </span>
                    </h2>
                    <p class="lead" Align="justify">Conquiste a vitória final com o módulo Checkmate do curso de
                        LGPD! Prepare-se
                        para enfrentar os desafios mais complexos da conformidade com a Lei Geral de Proteção de Dados.
                        Aprofunde seus
                        conhecimentos, domine estratégias avançadas e torne-se um especialista em proteção de
                        informações sensíveis.
                        Esteja à frente do jogo, antecipe-se às ameaças e leve sua carreira para o próximo nível. O
                        Checkmate é a
                        peça-chave para o sucesso na era da privacidade digital. Venha conquistar a coroa da LGPD agora
                        mesmo!</p>
                    <div class="locked-button">
                        <span></span>
                        <a class="btn btn-secondary" disabled>Bloqueado &otimes;</a>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="logo-effect">
                        <img src="../img/tela_3.png" class="img-fluid rounded rounded-4 box">
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br>

        <!-- O que voce aprenderar -->

        <h1 class="text-center">O que você aprenderá</h1>
        <br><br>
        <div class="container text-center">
            <div class="row row-cols-2 row-cols-lg-4 g-2 g-lg-3">
                <div class="col">
                    <div class="p-3 border rounded rounded-4 zoom-effect text-bg-dark">
                        <div class="text-start p-1">
                            <img src="../img/My project-6.png" class="img-fluid rounded" width="40%"
                                height="40%">
                        </div><br>
                        <div class="text-start">
                            <h3>Princípios da LGPD</h3>
                            <p class="lead">Entenda os conceitos fundamentais da Lei Geral de Proteção de Dados,
                                incluindo os direitos dos titulares dos dados, as bases legais para o processamento de
                                dados pessoais e
                                as obrigações das empresas.
                            </p><br>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border rounded rounded-4 zoom-effect text-bg-dark">
                        <div class="text-start p-1">
                            <img src="../img/My project-1.png" class="img-fluid rounded" width="40%"
                                height="40%">
                        </div><br>
                        <div class="text-start">
                            <h3>Proteção de Dados Pessoais</h3>
                            <p class="lead">Aprenda a proteger seus dados pessoais de maneira eficaz, adotando
                                práticas como
                                configuração de senhas fortes, criptografia, gerenciamento de cookies e controle de
                                permissões de
                                aplicativos.</p>
                        </div><br>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border rounded rounded-4 zoom-effect text-bg-dark">
                        <div class="text-start p-1">
                            <img src="../img/My project-7.png" class="img-fluid rounded" width="40%"
                                height="40%">
                        </div><br>
                        <div class="text-start">
                            <h3>Segurança Cibernética</h3>
                            <p class="lead">Descubra como identificar e se proteger de ameaças cibernéticas, como
                                phishing, malware,
                                ataques de engenharia social e invasões de privacidade, assim garantindo a sua segurança
                                e dos proximos.
                            </p>
                        </div><br>
                    </div>
                </div>
                <div class="col ">
                    <div class="p-3 border rounded rounded-4 zoom-effect text-bg-dark">
                        <div class="text-start p-1">
                            <img src="../img/My project-2.png" class="img-fluid rounded" width="40%"
                                height="40%">
                        </div><br>
                        <div class="text-start">
                            <h3>Boas Práticas Online</h3>
                            <p class="lead">Aprenda melhores práticas para navegação segura na internet, incluindo o
                                uso de redes
                                Wi-Fi públicas, a proteção de dispositivos móveis e a conscientização sobre
                                compartilhamento de
                                informações pessoais nas redes sociais.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>

        <!-- Para quem é -->

        <br><br><br>

        <div class="back">
            <h1 class="text-center">Para quem este curso é indicado</h1>
            <br>
            <div class="album py-5">
                <div class="container ">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="text-center">
                                    <img src="../img/My password-rafiki.png" class="img-fluid" width="100%"
                                        height="100%">
                                </div>
                                <div class="card-body">
                                    <h3>Iniciantes em Segurança</h3>
                                    <p class="card-text">Aprenda do zero tudo que você precisa saber sobre políticas e
                                        práticas da LGPD e
                                        cyber security.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="text-center ">
                                    <img src="../img/Secure data-rafiki.png" class="img-fluid" width="100%"
                                        height="100%">
                                </div>
                                <div class="card-body">
                                    <h3>Para Quem já Sabe</h3>
                                    <p class="card-text">Aprimore suas habilidades, aumente suas experiências na área e
                                        domine práticas
                                        novas.</p>
                                </div><br>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card shadow-sm">
                                <div class="text-center">
                                    <img src="../img/GDPR-rafiki.png" class="img-fluid" width="100%"
                                        height="100%">
                                </div>
                                <div class="card-body">
                                    <h3>Para Mestres</h3>
                                    <p class="card-text">Compreenda melhor a cibesegurança para gerenciar suas equipes
                                        e projeto com maior
                                        eficácia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br>

        <!-- Encher linguiça -->

        <div class="pt-4 pt-md-5 pt-lg-6 pb-5 pb-md-6 pb-lg-7 PageSection PageSection--container--on" id="sobre nos">
            <hr class="featurette-divider">
            <h1 class="text-center">Sobre Nós</h1>
            <br><br><br><br>
            <div class="PageSection__outer">
                <div class="PageSection__wrap container">
                    <div class="PageSection__inner">
                        <div class="PageSection__content">
                            <div
                                class="Columns Columns--align-inner--center Columns--align-items--space-around Columns--gutters--normal Columns--items-style--plain">
                                <div class="Columns__wrap">
                                    <div class="row Columns__row justify-content-around align-items-center">
                                        <div
                                            class="col-lg-6 col-md-6 col-sm-12 ColumnItem ColumnItem--background-texture-color--default">
                                            <div class="ColumnItem__item-wrapper ">
                                                <div class="ColumnItem__inner">
                                                    <div class="BasicContent BasicContent--image-position--top BasicContent--image-type--icon"
                                                        data-component-type="content">
                                                        <div class="BasicContent__wrap">
                                                            <div class="BasicContent__inner">
                                                                <div class="BasicContent__text">
                                                                    <div class="BasicContent__header text-align-left">
                                                                        <h2>
                                                                            <font style="vertical-align: inherit;">
                                                                                <font style="vertical-align: inherit;">
                                                                                    Apoiando uns aos outros e nossa
                                                                                    comunidade
                                                                                </font>
                                                                            </font>
                                                                        </h2>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div
                                            class="col-lg-5 col-md-5 col-sm-12 ColumnItem ColumnItem--bg-pattern-position--left ColumnItem--background-texture-color--default ColumnItem--background-texture-type--dots-odd odd">
                                            <div class="ColumnItem__item-wrapper ">
                                                <div class="ColumnItem__inner">
                                                    <div
                                                        class="Columns Columns--align-inner--stretch Columns--align-items--left Columns--gutters--normal Columns--items-style--plain">
                                                        <div class="Columns__wrap">
                                                            <div
                                                                class="row Columns__row justify-content-start align-items-stretch">
                                                                <div
                                                                    class="col-sm-12 ColumnItem hoverEnabled ColumnItem--bg-pattern-position--left ColumnItem--background-texture-color--default ColumnItem--background-texture-type--dots-even even">
                                                                    <div class="ColumnItem__item-wrapper ">
                                                                        <div class="ColumnItem__inner">
                                                                            <div class="BasicContent BasicContent--image-position--top BasicContent--image-type--icon"
                                                                                data-component-type="content">
                                                                                <div class="BasicContent__wrap">
                                                                                    <div class="BasicContent__inner">
                                                                                        <div
                                                                                            class="BasicContent__text">
                                                                                            <div
                                                                                                class="BasicContent__header text-align-left">
                                                                                                <h5>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            Diversidade,
                                                                                                            inclusão e
                                                                                                            pertencimento
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </h5>
                                                                                            </div>
                                                                                            <div
                                                                                                class="BasicContent__body">
                                                                                                <p>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            Nós nos
                                                                                                            preocupamos
                                                                                                            com a
                                                                                                            comunidade e
                                                                                                            segurança
                                                                                                            dentro e
                                                                                                            fora do
                                                                                                            mundo
                                                                                                            digital.
                                                                                                        </font>
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            Com o
                                                                                                            objetivo é
                                                                                                            capacitar
                                                                                                            pessoas
                                                                                                            leigas a
                                                                                                            entenderem a
                                                                                                            importância
                                                                                                            da proteção
                                                                                                            de dados e a
                                                                                                            se
                                                                                                            protegerem
                                                                                                            no ambiente
                                                                                                            digital.
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="BasicContent__cta">
                                                                                                <div
                                                                                                    class="Cta Cta--default">
                                                                                                    <a class="Cta__link"
                                                                                                        data-cta-element="1"
                                                                                                        href="/diversity/">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-sm-12 ColumnItem hoverEnabled ColumnItem--bg-pattern-position--left ColumnItem--background-texture-color--default ColumnItem--background-texture-type--dots-even even">
                                                                    <div class="ColumnItem__item-wrapper ">
                                                                        <div class="ColumnItem__inner">
                                                                            <div class="BasicContent BasicContent--image-position--top BasicContent--image-type--icon"
                                                                                data-component-type="content">
                                                                                <div class="BasicContent__wrap">
                                                                                    <div class="BasicContent__inner">
                                                                                        <div
                                                                                            class="BasicContent__text">
                                                                                            <div
                                                                                                class="BasicContent__header text-align-left">
                                                                                                <h5>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            Impacto
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </h5>
                                                                                            </div>
                                                                                            <div
                                                                                                class="BasicContent__body">
                                                                                                <p>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            Acreditamos
                                                                                                            que a
                                                                                                            privacidade
                                                                                                            e a
                                                                                                            segurança
                                                                                                            são direitos
                                                                                                            fundamentais
                                                                                                            e queremos
                                                                                                            ajudar você
                                                                                                            a
                                                                                                            exercê-los
                                                                                                            de maneira
                                                                                                            fácil e
                                                                                                            eficaz.
                                                                                                        </font>
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            Assumimos o
                                                                                                            compromisso
                                                                                                            de
                                                                                                            1% e
                                                                                                            dedicamos
                                                                                                            nosso tempo,
                                                                                                            produto e
                                                                                                            patrimônio
                                                                                                            para
                                                                                                            retribuir.
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="BasicContent__cta">
                                                                                                <div
                                                                                                    class="Cta Cta--default">
                                                                                                    <a class="Cta__link"
                                                                                                        data-cta-element="1"
                                                                                                        href="/okta-for-good/">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div
                                                                    class="col-sm-12 ColumnItem hoverEnabled ColumnItem--bg-pattern-position--left ColumnItem--background-texture-color--default ColumnItem--background-texture-type--dots-odd odd">
                                                                    <div class="ColumnItem__item-wrapper ">
                                                                        <div class="ColumnItem__inner">
                                                                            <div class="BasicContent BasicContent--image-position--top BasicContent--image-type--icon"
                                                                                data-component-type="content">
                                                                                <div class="BasicContent__wrap">
                                                                                    <div class="BasicContent__inner">
                                                                                        <div
                                                                                            class="BasicContent__text">
                                                                                            <div
                                                                                                class="BasicContent__header text-align-left">
                                                                                                <h5>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            Nos Somos
                                                                                                            Leran Secure
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </h5>
                                                                                            </div>
                                                                                            <div
                                                                                                class="BasicContent__body">
                                                                                                <p>
                                                                                                    <font
                                                                                                        style="vertical-align: inherit;">
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            Nosso
                                                                                                            pessoal
                                                                                                            tornou esse
                                                                                                            projeto
                                                                                                            único.
                                                                                                        </font>
                                                                                                        <font
                                                                                                            style="vertical-align: inherit;">
                                                                                                            Conheça as
                                                                                                            histórias
                                                                                                            pessoais e
                                                                                                            profissionais
                                                                                                            de alguns de
                                                                                                            nossos
                                                                                                            criadores e
                                                                                                            solucionadores
                                                                                                            de
                                                                                                            problemas,
                                                                                                            nossos
                                                                                                            artistas,
                                                                                                            nossos
                                                                                                            construtores.
                                                                                                        </font>
                                                                                                    </font>
                                                                                                </p>
                                                                                            </div>
                                                                                            <div
                                                                                                class="BasicContent__cta">
                                                                                                <div
                                                                                                    class="Cta Cta--default">
                                                                                                    <a class="Cta__link"
                                                                                                        data-cta-element="1"
                                                                                                        href="/i-am-okta/">
                                                                                                    </a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nossa Equipe -------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <!-- <br><br><br><br> -->
        <!-- <div class="container text-center">
    <div class="row justify-content-around">
      <div class="col-4 box">
        <div class="text-center zoom-effect">
          <img src="../img/example.png" class="img-fluid rounded imgBx" alt="" width="50%" height="50%">
          <div class="contentBx">
            <p>informações</p>
          </div>
        </div>
      </div>

      <div class="col-4 box">
        <div class="text-center zoom-effect">
          <img src="../img/example.png" class="img-fluid rounded imgBx" alt="" width="50%" height="50%">
          <div class="contentBx">
            <p>informações</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-between">
      <div class="col-4 box">
        <div class="text-center zoom-effect">
          <img src="../img/example.png" class="img-fluid rounded imgBx" alt="" width="50%" height="50%">
          <div class="contentBx">
            <p>informações</p>
          </div>
        </div>
      </div>

      <div class="col-4 box">
        <div class="text-center zoom-effect">
          <img src="../img/example.png" class="img-fluid rounded imgBx" alt="" width="50%" height="50%">
          <div class="contentBx">
            <p>informações</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-evenly">
      <div class="col-4 box">
        <div class="text-center zoom-effect">
          <img src="../img/example.png" class="img-fluid rounded imgBx" alt="" width="50%" height="50%">
          <div class="contentBx">
            <p>informações</p>
          </div>
        </div>
      </div>

      <div class="col-4 box">
        <div class="text-center zoom-effect">
          <img src="../img/example.png" class="img-fluid rounded imgBx" alt="" width="50%" height="50%">
          <div class="contentBx">
            <p>informações</p>
          </div>
        </div>
      </div>
    </div>
  </div> -->

        <br><br><br><br>

        <!-- Nossa Visao -->

        <div class="container marketing ">
            <div class="row featurette">
                <div class="col-md-7 order-md-2 text-center">
                    <br><br><br><br>
                    <h2>Nossa Visão</h2><br>
                    <h5>Acreditamos que a privacidade e a segurança são direitos fundamentais de cada indivíduo. Nossa
                        missão é
                        capacitá-lo a exercer esses direitos de forma fácil e eficaz. Por meio de recursos educativos e
                        orientações
                        práticas, buscamos fornecer o conhecimento necessário para que você possa proteger seus dados
                        pessoais e
                        manter-se seguro no mundo digital. Estamos comprometidos em simplificar a complexidade da LGPD e
                        da cyber
                        security, para que você possa navegar na internet com confiança, sabendo que seus dados estão
                        protegidos.
                        Junte-se a nós nessa jornada de conscientização e empoderamento digital.</h5>
                </div>

                <div class="col-md-5 order-md-1">
                    <div>
                        <img src="../img/agile method-rafiki.png" class="img-fluid rounded rounded-4 box">
                    </div>
                </div>
            </div>
        </div>


        <hr class="featurette-divider">

        <!-- Nossos Valores -->
        <div class="col-lg-12  col-md-12 col-sm-12 ColumnItem ColumnItem--background-texture-color--default">
            <div class="ColumnItem__item-wrapper ">
                <div class="ColumnItem__inner">
                    <div
                        class="Columns Columns--align-inner--stretch Columns--align-items--left Columns--gutters--normal Columns--items-style--plain">
                        <div class="Columns__wrap">
                            <div class="row Columns__row justify-content-start align-items-stretch text-center">
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 ColumnItem ColumnItem--background-texture-color--default">
                                    <div class="ColumnItem__item-wrapper ">
                                        <div class="ColumnItem__inner">
                                            <div class="BasicContent BasicContent--image-position--top BasicContent--image-type--icon"
                                                data-component-type="content">
                                                <div class="BasicContent__wrap">
                                                    <div class="BasicContent__inner">
                                                        <div class="BasicContent__image">
                                                            <div class="svg-container" about="/taxonomy/term/3760">
                                                                <br>
                                                                <svg enable-background="new 0 0 76 50" width="76"
                                                                    height="50" viewBox="0 0 76 50"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="m58 20c-4.1 0-7.5-3.4-7.5-7.5v-5c0-4.1 3.4-7.5 7.5-7.5s7.5 3.4 7.5 7.5v5c0 4.1-3.4 7.5-7.5 7.5zm0-17.5c-2.8 0-5 2.2-5 5v5c0 2.8 2.2 5 5 5s5-2.2 5-5v-5c0-2.8-2.2-5-5-5z"
                                                                        fill="#7d91cb" class="path_B"></path>
                                                                    <path
                                                                        d="m18 20c-4.1 0-7.5-3.4-7.5-7.5v-5c0-4.1 3.4-7.5 7.5-7.5s7.5 3.4 7.5 7.5v5c0 4.1-3.4 7.5-7.5 7.5zm0-17.5c-2.8 0-5 2.2-5 5v5c0 2.8 2.2 5 5 5s5-2.2 5-5v-5c0-2.8-2.2-5-5-5z"
                                                                        fill="#7d91cb" class="path_B"></path>
                                                                    <path
                                                                        d="m38 25c-5.5 0-10-4.5-10-10v-5c0-5.5 4.5-10 10-10s10 4.5 10 10v5c0 5.5-4.5 10-10 10zm0-22.5c-4.1 0-7.5 3.4-7.5 7.5v5c0 4.1 3.4 7.5 7.5 7.5s7.5-3.4 7.5-7.5v-5c0-4.1-3.4-7.5-7.5-7.5z"
                                                                        fill="#002979" class="path_A"></path>
                                                                    <path
                                                                        d="m58.3 50h-40.7l4.4-17.6c1.1-4.4 5.1-7.4 9.6-7.4h12.7c4.5 0 8.5 3 9.6 7.4zm-37.5-2.5h34.3l-3.6-14.5c-.9-3.3-3.8-5.5-7.2-5.5h-12.6c-3.4 0-6.3 2.2-7.2 5.5z"
                                                                        fill="#002979" class="path_A"></path>
                                                                    <g fill="#7d91cb">
                                                                        <path
                                                                            d="m18.2 37.5h-14.7l3.4-10.7c.8-2.6 3.3-4.4 6-4.3h10.1c1.3 0 2.5.4 3.5 1.1.9-.4 1.8-.7 2.8-.9-1.6-1.7-3.9-2.7-6.3-2.7h-10.2c-3.8 0-7.2 2.5-8.3 6.1l-4.5 13.9h17.6z"
                                                                            class="path_B">
                                                                        </path>
                                                                        <path
                                                                            d="m49.3 23.6c1-.7 2.2-1.1 3.5-1.1h10.2c2.7 0 5.1 1.7 6 4.3l3.5 10.7h-14.7l.6 2.5h17.6l-4.7-14c-1.2-3.6-4.5-6-8.3-6h-10.2c-2.4 0-4.7 1-6.3 2.7 1 .2 1.9.5 2.8.9z"
                                                                            class="path_B">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="BasicContent__text">
                                                            <div class="BasicContent__header text-align-left">
                                                                <h5>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            Capacite nosso pessoal
                                                                        </font>
                                                                    </font>
                                                                </h5>
                                                            </div>
                                                            <div class="BasicContent__body">
                                                                <p>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Somos
                                                                            uma comunidade diversificada e
                                                                            apaixonada de pessoas que se preocupam
                                                                            profundamente com nossos produtos,
                                                                            marca
                                                                            e cultura.&nbsp;</font>
                                                                    </font>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 ColumnItem ColumnItem--background-texture-color--default">
                                    <div class="ColumnItem__item-wrapper ">
                                        <div class="ColumnItem__inner">
                                            <div class="BasicContent BasicContent--image-position--top BasicContent--image-type--icon"
                                                data-component-type="content">
                                                <div class="BasicContent__wrap">
                                                    <div class="BasicContent__inner">
                                                        <div class="BasicContent__image">
                                                            <div class="svg-container" about="/taxonomy/term/3719">
                                                                <svg enable-background="new 0 0 52.5 74.6"
                                                                    width="52.5" height="74.6"
                                                                    viewBox="0 0 52.5 74.6"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="m26.2 52.5c-14.4 0-26.2-11.8-26.2-26.3s11.8-26.2 26.2-26.2 26.2 11.8 26.2 26.2c.1 14.5-11.7 26.3-26.2 26.3zm0-50c-13.1 0-23.7 10.6-23.7 23.7s10.6 23.8 23.7 23.8 23.8-10.6 23.8-23.8c0-13.1-10.6-23.7-23.8-23.7z"
                                                                        fill="#002979" class="path_A"></path>
                                                                    <path
                                                                        d="m12.5 74.5v-23l2.5 1.2v17.8l8.5-4.2c1.8-.9 3.8-.9 5.6 0l8.5 4.2v-17.7l2.5-1.2v23l-12.1-6c-1.1-.5-2.3-.5-3.3 0z"
                                                                        fill="#002979" class="path_A"></path>
                                                                    <path
                                                                        d="m24.6 35.4c-.3 0-.6-.1-.9-.3l-10.8-10.4 1.7-1.8 9.9 9.4 15.8-16.9 1.8 1.7-16.6 17.8c-.2.3-.6.4-.9.5z"
                                                                        fill="#7d91cb" class="path_B"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="BasicContent__text">
                                                            <div class="BasicContent__header text-align-left">
                                                                <h5>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            Nunca pare de inovar
                                                                        </font>
                                                                    </font>
                                                                </h5>
                                                            </div>
                                                            <div class="BasicContent__body">
                                                                <p>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Somos
                                                                            uma empresa de construtores, e
                                                                            somos
                                                                            movidos a enfrentar os problemas difíceis e
                                                                            resolvê-los.</font>
                                                                    </font>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-4 col-md-6 col-sm-12 ColumnItem ColumnItem--background-texture-color--default">
                                    <div class="ColumnItem__item-wrapper ">
                                        <div class="ColumnItem__inner">
                                            <div class="BasicContent BasicContent--image-position--top BasicContent--image-type--icon"
                                                data-component-type="content">
                                                <div class="BasicContent__wrap">
                                                    <div class="BasicContent__inner">
                                                        <div class="BasicContent__image">
                                                            <div class="svg-container" about="/taxonomy/term/3782">
                                                                <svg enable-background="new 0 0 70 69.3"
                                                                    width="70" height="69.3"
                                                                    viewBox="0 0 70 69.3"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="m17.5 30h-6.8l-8.2 8.2v-32c0-2.1 1.7-3.8 3.8-3.8h32.5c2.1 0 3.8 1.7 3.8 3.8v8.8h2.4v-8.8c0-3.4-2.8-6.2-6.2-6.2h-32.6c-3.4 0-6.2 2.8-6.2 6.2v38l11.8-11.8h5.7z"
                                                                        fill="#002979" class="path_A"></path>
                                                                    <path
                                                                        d="m70 69.3-14.3-14.3h-29.5c-3.4 0-6.2-2.8-6.2-6.2v-25c0-3.5 2.8-6.2 6.2-6.2h37.5c3.5 0 6.2 2.8 6.2 6.2v45.5zm-43.8-49.3c-2.1 0-3.8 1.7-3.8 3.7v25c0 2.1 1.7 3.8 3.8 3.8h30.5l10.7 10.7v-39.4c0-2.1-1.7-3.8-3.8-3.8z"
                                                                        fill="#7d91cb" class="path_B"></path>
                                                                    <g fill="#002979">
                                                                        <path d="m30 30h30v2.5h-30z" class="path_A">
                                                                        </path>
                                                                        <path d="m30 40h30v2.5h-30z" class="path_A">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                        <div class="BasicContent__text">
                                                            <div class="BasicContent__header text-align-left">
                                                                <h5>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">
                                                                            Seja transparente
                                                                        </font>
                                                                    </font>
                                                                </h5>
                                                            </div>
                                                            <div class="BasicContent__body">
                                                                <p>
                                                                    <font style="vertical-align: inherit;">
                                                                        <font style="vertical-align: inherit;">Sabemos
                                                                            que manter um fluxo aberto de
                                                                            informações entre equipes, entre indivíduos,
                                                                            para cima e para baixo e ao redor
                                                                            da empresa é crucial para a forma como
                                                                            trabalhamos.</font>
                                                                    </font>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="featurette-divider">

                                <footer class="card-footer container flex-shrink-0 py-4 align-content-center">
                                    <div class="container text-center">
                                        <p>&copy; 2023 Company, Inc. &middot; <a href="{{ route('termos') }}">Termos de Privacidade</a></p>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../assets/dist/js/tela_inicio/vanilla-tilt.js"></script>
    <script type="text/javascript">
        VanillaTilt.init(document.querySelectorAll('.box'), {
            max: 30,
            speed: 400
        })
    </script>
</body>



</html>
{{--  <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    <svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900">
                        <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="#FF2D20"/>
                    </svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <a href="https://laravel.com/docs" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Documentation</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel has wonderful documentation covering every aspect of the framework. Whether you are a newcomer or have prior experience with Laravel, we recommend reading our documentation from beginning to end.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laracasts.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laracasts</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <a href="https://laravel-news.com" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Laravel News</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </p>
                            </div>

                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                            </svg>
                        </a>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>
                                <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-7 h-7 stroke-red-500">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                </div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>, <a href="https://vapor.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>, <a href="https://nova.laravel.com" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>, and <a href="https://envoyer.io" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>, and more.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>  --}}
