<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doucsoft - HomePage</title>
    <link rel="stylesheet" href="http://localhost:8000/asset/css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="asset/css/style.css">-->
    <style>
        * {
            font-family: 'poppins';
        }

        .logo {
            padding-top: 0.3125rem;
            padding-bottom: 0.3125rem;
            margin-right: 1rem;
            font-size: 1.90rem;
            font-weight: 600;
            color: #6c5ce7;
            text-decoration: none;
            white-space: nowrap;
            transition: all 0.5s;
        }

        .logo:hover {
            color: #f0f0f0;
            text-shadow: 0 0 15px #6c5ce7;
        }

        .logo span {
            color: #f0f0f0;
        }

        @media screen and (max-width: 768px) {
            .logo {
                font-size: 1.25rem;
                font-weight: 600;
                color: #f0f0f0;
                text-shadow: 0 0 15px #6c5ce7;
            }
        }

        .btn-purple {
            border: none;
            border-radius: 50px;
            color: #f0f0f0;
            background-color: #6528e0;
            padding: 6px 10px;
            font-weight: 1000;
            transition: all 1s;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 999;
            transition: background-color 0.3s ease-in-out;
        }

        .header.scrolled {
            background-color: black;
        }
    </style>
</head>

<body>
    <!--Other-->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
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

    <div class="position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <ul aria-labelledby="bd-theme-text">
            <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                <!-- Icone pour remonter en haut -->
                <symbol id="arrow-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 12a.5.5 0 0 1-.5-.5V3.707L3.354 8.854a.5.5 0 1 1-.708-.708l5-5a.5.5 0 0 1 .708 0l5 5a.5.5 0 0 1-.708.708L8.5 3.707V11.5a.5.5 0 0 1-.5.5z" />
                </symbol>
            </svg>

            <button id="back-to-top" class="btn-purple">
                <svg class="bi" width="1em" height="1em">
                    <use href="#arrow-up"></use>
                </svg>
            </button>

            <script>
                // Ajoute un écouteur d'événement au clic du bouton
                document.getElementById('back-to-top').addEventListener('click', function() {
                    // Fait défiler la page vers le haut en douceur
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth'
                    });
                });
            </script>
        </ul>
    </div>

    <!-- Header -->
    <header data-bs-theme="dark" id="main-header">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
                <a class="logo" href="index">Douc<span>soft_</span>Learning</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse sidebar" id="navbarCollapse">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a href="format" class="nav-link">Formations En Cours</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <a href="#" class="nav-link">Certificats</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">Progression</a>
                            </li>
                        @endauth
                        <div class="dropdown">
                            <a href="#"
                                class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="storage/formations/Capture d'écran 2024-04-10 221310.png" alt=""
                                    width="32" height="32" class="rounded-circle me-2">
                                <strong>mdo</strong>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">

                                @guest
                                    <li><a class="dropdown-item" href="register">Inscription</a></li>
                                    <li><a class="dropdown-item" href="login">Connexion</a></li>
                                @endguest

                                @auth
                                    <li><a class="dropdown-item" href="profil">Profil</a></li>

                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>

                                    <li><a class="dropdown-item" href="sign_out">Déconnexion</a></li>
                                @endauth
                            </ul>
                        </div>
                    </ul>
                </div>

            </div>
        </nav>
    </header>


    <!-- Script -->
    {{-- <script src="asset/js/bootstrap.min.js"></script> --}}
    <script src="http://localhost:8000/asset/js/bootstrap.bundle.min.js"></script>
    </main>
</body>

</html>
