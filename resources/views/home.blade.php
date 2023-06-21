<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/examples/sidebars/" rel="canonical">
    {{--  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/carousel/">  --}}
    <link href="https://getbootstrap.com/docs/5.3/examples/carousel/" rel="canonical">
    <link href="{{ asset('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/carrousel/carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/tela_inicio/tela_inicio.css') }}" rel="stylesheet">

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/color-modes.js"></script>
    <script src="../assets/dist/js/tela_inicio/incio.js"></script>


</head>

<body>

    <!-- Botão modo noturno/modo claro -->
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

    <!-- Texto principal/inicial -->

    <div class="MainContainer">
        <div class="ParallaxContainer">
            <div class="titulo logo-effect" data-bs-theme="dark">
                <img class="img-fluid" src="../img/logo_securelearn.png" width="700px">
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
                    <img src="{{ asset('assets/img/noticia_3.png') }}" class="d-block w-100" alt="">
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
                <div class="col-12 col-sm-12 col-lg-6 zoom-effect-1">
                    <img src="{{ asset('img/cybercyber-2.gif') }}" class="img-fluid rounded rounded-5 img-gif">
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

                    {{--  Botões da introdução de conteúdo  --}}

                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <div class="col">
                            <p><a class="btn btn-primary btn-lg px-4 me-md-2 button-effect"
                                    href="{{ route('conteudo') }}">Acessar
                                    Conteúdo
                                    &raquo;</a></p>
                        </div>
                        <div class="col">
                            <p><a class="btn btn-primary btn-lg px-4 me-md-2 button-effect" href="home/profile">Perfil
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

        <hr class="featurette-divider">

        <!-- Módulos -->

        <div class="container marketing" id="modulos">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Modulo 1: <span
                            class="text-body-secondary">Introdução ao
                            conhecimento</span></h2>
                    <p class="lead" Align="justify">Seja o mestre da proteção de dados com nosso módulo de
                        introdução! Aprenda os
                        princípios fundamentais, diretrizes e implicações da Lei Geral de Proteção de Dados em um
                        mergulho profundo
                        no
                        mundo da privacidade. Domine as melhores práticas de conformidade e descubra como proteger
                        informações
                        sensíveis de forma eficaz. Prepare-se para enfrentar o futuro com confiança e segurança. O
                        conhecimento é
                        poder, e a LGPD está ao seu alcance!</p>
                    <p><a class="btn btn-secondary button-effect" href="{{ route('conteudo') }}">Acessar Conteúdo
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
                        proteger
                        dados,
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
                        Aprofunde
                        seus
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
                                </div>
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
{{--  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  --}}
