<!doctype html>
<html lang="pt-br" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conteudo+cursos</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link href="{{asset ('assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="sidebars.css" rel="stylesheet">
    <link href="{{asset ('assets/dist/css/index_conteudo/index_conteudo.css') }}" rel="stylesheet">

    <script src="{{ asset('assets/js/index_conteudo/index_conteudo.js') }}"></script>
    <script src="{{ asset('assets/dist/js/tela_inicio/incio.js') }}"></script>
    <script src="{{ asset('assets/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" https://unpkg.com/sweetalert/dist/sweetalert.min.js "></script>
</head>

<body class="card-body">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
            </path>
        </symbol>

        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
        </symbol>

        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z">
            </path>
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z">
            </path>
        </symbol>

        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z">
            </path>
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle card-button BTN-T">
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
        </ul>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="bootstrap" viewBox="0 0 118 94">
            <title>Bootstrap</title>
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z">
            </path>
        </symbol>

        <symbol id="home" viewBox="0 0 16 16">
            <path
                d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z">
            </path>
        </symbol>

        <symbol id="speedometer2" viewBox="0 0 16 16">
            <path
                d="M8 4a.5.5 0 0 1 .5.5V6a.5.5 0 0 1-1 0V4.5A.5.5 0 0 1 8 4zM3.732 5.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 10a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 10zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 9.31a.91.91 0 1 0 1.302 1.258l3.434-4.297a.389.389 0 0 0-.029-.518z">
            </path>
            <path fill-rule="evenodd"
                d="M0 10a8 8 0 1 1 15.547 2.661c-.442 1.253-1.845 1.602-2.932 1.25C11.309 13.488 9.475 13 8 13c-1.474 0-3.31.488-4.615.911-1.087.352-2.49.003-2.932-1.25A7.988 7.988 0 0 1 0 10zm8-7a7 7 0 0 0-6.603 9.329c.203.575.923.876 1.68.63C4.397 12.533 6.358 12 8 12s3.604.532 4.923.96c.757.245 1.477-.056 1.68-.631A7 7 0 0 0 8 3z">
            </path>
        </symbol>

        <symbol id="table" viewBox="0 0 16 16">
            <path
                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z">
            </path>
        </symbol>

        <symbol id="people-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
            <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
            </path>
        </symbol>

        <symbol id="grid" viewBox="0 0 16 16">
            <path
                d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z">
            </path>
        </symbol>
    </svg>



    <main class="d-flex flex-nowrap card-main">
        <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 217px; padding-left:-3px;">

            <a href="{{ route('home') }}"
                class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="../img/logo_securelearn.png" height="60px" alt="">
                </svg>
            </a>

            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link active" id="nav_link" aria-current="page">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Home
                    </a>
                </li>

                <li>
                    <a class="nav-link link-body-emphasis text-black-50" style="user-select: none">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Dashboard
                    </a>
                </li>

                <li>
                    <a class="nav-link link-body-emphasis text-black-50" style="user-select: none">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Progresso
                    </a>
                </li>

                <li>
                    <a class="nav-link link-body-emphasis text-black-50" style="user-select: none">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Cursos
                    </a>
                </li>

                <li>
                    <a class="nav-link link-body-emphasis text-black-50" style="user-select: none">
                        <svg class="bi pe-none me-2" width="16" height="16">
                            <use xlink:href="#people-circle"></use>
                        </svg>
                        Carreira
                    </a>
                </li>
            </ul>

            <hr>

            {{--  Menu inferior user  --}}
            <div class="dropdown">
                <a href="#"
                    class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                        alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Usuário</strong>
                </a>

                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item text-black-50" style="user-select: none">Cursos</a></li>
                    <li><a class="dropdown-item text-black-50" style="user-select: none">Configurações</a></li>
                    <li><a class="dropdown-item" href="home/profile">Perfil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ route('home') }}">Sair</a></li>
                </ul>
            </div>
        </div>

        <!-- Título/Descrição do curso 1 -->
        <div class="container my-5 block">
            <div class="gray-background rounded-5 my-2 px-4">
                <div class="col-sm-8 py-5 mx-auto p-2 ">
                    <h1>Introdução ao Conhecimento da Proteção de Dados</h1>
                    <h6 class="subtitulo">Curso para profissionais que buscam aprimorar seus conhecimentos sobre
                        privacidade e
                        segurança de dados.</h6>
                </div>
            </div>

            <br>

            <div class="container d-flex justify-content-center block">
                <div class="p-4">
                    <div class="row align-items-center">
                        <div class="col-sm-12 text-center">
                            <h1 class="mb-4">Você aprenderá:</h1>
                        </div>
                        <div class="col-sm-6 text-left">
                            <div class="d-flex flex-column justify-content-center align-items-center text-center">
                                <div class="d-flex flex-column">
                                    <small class="d-block mb-2 small">
                                        <img src="https://img.icons8.com/?size=32&id=98955&format=png" width="20"
                                            height="20" class="mx-2 icon-alt">
                                        LGPD
                                    </small>
                                    <small class="d-block mb-2 small">
                                        <img src="https://img.icons8.com/?size=32&id=98955&format=png" width="20"
                                            height="20" class="mx-2 icon-alt">
                                        Segurança
                                    </small>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 text-right">
                            <div class="d-flex flex-column justify-content-center align-items-center">
                                <div class="d-flex flex-column">
                                    <small class="d-block mb-2 small">
                                        <img src="https://img.icons8.com/?size=32&id=98955&format=png" width="20"
                                            height="20" class="mx-2 icon-alt">
                                        Privacidade
                                    </small>
                                    <small class="d-block small">
                                        <img src="https://img.icons8.com/?size=32&id=98955&format=png" width="20"
                                            height="20" class="mx-2 icon-alt">
                                        Compilance
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <br>

            <h2>Descrição</h2>
            <p>O curso abordará os principais conceitos e normas da LGPD, incluindo a definição de dados pessoais, bases
                legais para o tratamento de dados, direitos dos titulares, responsabilidades do controlador e operador,
                medidas
                de segurança e privacidade, e as sanções e multas previstas em caso de violações. Além disso, o curso
                irá
                ensinar técnicas e ferramentas para a implementação de programas de conformidade com a LGPD, com foco na
                proteção de dados pessoais em empresas e organizações. Ao final do curso, o aluno terá um conhecimento
                sólido
                sobre a LGPD e estará apto a aplicar as melhores práticas para garantir a privacidade e segurança dos
                dados
                pessoais.</p>

            <br>

            <h1>Conteúdo do curso</h1>

            <br>

            <div class="accordion block" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Introdução
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png"
                                    class="img-with-margin icon-alt2"
                                    style="width: 18px; height: 18px; vertical-align: middle;" />Introdução ao
                                Conhecimento</p>
                            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png"
                                    class="img-with-margin icon-alt2"
                                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais</p>
                            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png"
                                    class="img-with-margin icon-alt2"
                                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais
                                Sensíveis</p>
                            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png"
                                    class="img-with-margin icon-alt2"
                                    style="width: 18px; height: 18px; vertical-align: middle;" />Dados Pessoais
                                Anonimizados</p>
                            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png"
                                    class="img-with-margin icon-alt2"
                                    style="width: 18px; height: 18px; vertical-align: middle;" />Tratamento de Dados
                            </p>
                            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png"
                                    class="img-with-margin icon-alt2"
                                    style="width: 18px; height: 18px; vertical-align: middle;" />Agentes de Tratamento
                            </p>
                            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png"
                                    class="img-with-margin icon-alt2"
                                    style="width: 18px; height: 18px; vertical-align: middle;" />Segurança e Sigilo dos
                                Dados</p>
                            <p><img src="https://img.icons8.com/?size=32&id=1395&format=png"
                                    class="img-with-margin icon-alt2"
                                    style="width: 18px; height: 18px; vertical-align: middle;" />Sanções</p>
                            <p><img src="https://img.icons8.com/?size=512&id=oGYlTvbCpofj&format=png"
                                    class="img-with-margin icon-alt2"
                                    style="width: 18px; height: 18px; vertical-align: middle;" />Quiz</p>
                            <!-- <p><img src="https://img.icons8.com/?size=512&id=oGYlTvbCpofj&format=png" class="img-with-margin"
                  style="width: 18px; height: 18px; vertical-align: middle;" />sdasdas</p> -->
                        </div>
                    </div>
                </div>
            </div>

            <br>

            <h2>Para quem é esse curso:</h2>

            <table>
                <tr>
                    <td>&bull; Para pessoas leigas</td>
                </tr>
                <tr>
                    <td>&bull; Interesse na área de segurança</td>
                </tr>
                <tr>
                    <td>&bull; Querer aprender sobre LGPD</td>
                </tr>
            </table>

            <br>
            <br>

            <h5>Antes de iniciar o conteúdo, realize um teste rápido para avaliação de conhecimento.</h5>
            <div class="col-md-5 order-md-1">
                <div>
                    <img src="../img/Customer Survey-rafiki.png" class="img-fluid rounded rounded-4 zoom-effect"
                        width="400px" height="400px box">
                </div>
            </div>
            <br>
            <br>

            <button onclick="teste_de_conhecimento()" class="btn btn-success rounded-pill px-3" type="button">Fazer
                teste de
                conhecimento!
            </button>
        </div>
    </main>
</body>
</scr>

</html>
