<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <link rel="stylesheet" href="/css/styles.css"></link>
        <script src="/js/script.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/c137_logo.svg" alt="Universe C-137">
                    </a>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/games/dashboard" class="nav-link">Jogos</a>
                        </li>

                        @auth
                        <li class="nav-item">
                            <a href="/games/create" class="nav-link">Cadastrar Jogos</a>
                        </li>
                        <li class="nav-item">
                            <a href="/companies/create" class="nav-link">Cadastrar Empresas</a>
                        </li>
                        <li class="nav-item">
                            <a href="/categories/create" class="nav-link">Cadastrar Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a href="/platforms/create" class="nav-link">Cadastrar Plataforma</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                            </form>
                        </li>

                        @endauth

                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Registrar-se</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </nav>
        </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <p class="msg"> {{ session('msg') }}</p>
                @endif    
                @yield('content')
            </div>
        </div>
    </main>
    <footer>
        <p class="copyright">Universe C-137 &copy; 2024</p>

        <h5>Sobre a gente:</h5>
        <p>Universe C-137 é um e-commerce especializado em jogos. Aqui você encontra os títulos mais populares, divertidos e jogados do momento, selecionados para oferecer a melhor experiência de entretenimento.</p>
        <h5>Curiosidade:</h5>
        <p>O nome Universe C-137 é uma referência à série Rick and Morty. Na trama, C-137 é o universo original de Rick Sanchez. Aqui, ele representa um "universo de jogos," onde você encontra uma galáxia de opções e entretenimento.</p>
        <h5>Autores e Desenvolvedores:</h5>
        <ul class="autores">
            <li>
                <a href="https://www.instagram.com/joao.adonis/">
                    <ion-icon name="person-circle-outline"></ion-icon> João Vitor Adonis
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/_araujmll/">
                    <ion-icon name="person-circle-outline"></ion-icon> Marllon Silva Araujo Coelho
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/oobakemono/">
                    <ion-icon name="person-circle-outline"></ion-icon> Matheus Henrique de Lima
                </a>
            </li>
        </ul>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    </body>
</html>
