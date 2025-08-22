<!DOCTYPE html>
<html lang="pt-ao">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{ asset('fonts/fontawesome-6.5.2/css/fontawesome.css') }}?<?= time() ?>" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-6.5.2/css/brands.css') }}?<?= time() ?>" rel="stylesheet">
    <link href="{{ asset('fonts/fontawesome-6.5.2/css/solid.css') }}?<?= time() ?>" rel="stylesheet">
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}?<?= time() ?>">
</head>

<body>
    <!--header-->
    <header class="header" id="top">
        <div class="header-top">
            <div class="social">
                <a href="#" class="fab fa-facebook" title="Facebook"></a>
                <a href="#" class="fab fa-twitter" title="Twitter"></a>
                <a href="#" class="fab fa-instagram" title="Instagram"></a>
                <a href="#" class="fab fa-linkedin" title="Linkedin"></a>
            </div>

            <div class="alert">
                <p>
                    <strong>Jornalismo livre</strong> - Informamos com transparência
                </p>
            </div>

            <div class="phones">
                <a href="tel: +244 999999999" title="Número de telefone">+244 999999999</a>
                <a href="tel: +244 999999999" title="Número de telefone">+244 999999999</a>
            </div>
        </div>

        <div class="header-category">
            <div class="swiper category-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide">
                        <a href="#">Notícias</a>
                    </div>

                    <div class="swiper-slide slide">
                        <a href="#">Desporto</a>
                    </div>
                    <div class="swiper-slide slide">
                        <a href="#">Sociedade</a>
                    </div>
                    <div class="swiper-slide slide">
                        <a href="#">Música</a>
                    </div>
                    <div class="swiper-slide slide">
                        <a href="#">Ciência</a>
                    </div>
                    <div class="swiper-slide slide">
                        <a href="#">Tecnologia</a>
                    </div>
                    <div class="swiper-slide slide">
                        <a href="#">Cultura</a>
                    </div>
                    <div class="swiper-slide slide">
                        <a href="#">Saúde</a>
                    </div>
                    <div class="swiper-slide slide">
                        <a href="#">Entretenimento</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-main">
            <div id="menu" class="fas fa-bars"></div>

            <a href="{{ route('site.index') }}" class="logo" title="Blog logo">
                <i class="fas fa-blog"></i> Blog
            </a>

            <nav class="navbar">
                <a href="{{ route('site.index') }}" title="Home">Home</a>
                <a href="{{ route('site.sobre') }}" title="Sobre">Sobre</a>
                <a href="{{ route('site.categoria') }}" title="Notícias">Notícias</a>
                <a href="{{ route('site.categoria') }}" title="Entretenimento">Entretenimento</a>
                <a href="{{ route('site.contato') }}" title="Contato">Contato</a>
            </nav>

            <div class="icons">
                <button class="action-btn fas fa-search" id="search-btn" title="Pesquisar"></button>
                <a href="{{ route('login') }}" class="action-btn fas fa-user" title="Login"></a>
            </div>

            <!--formulário de busca-->
            <form action="{{ route('site.busca') }}" class="search-form">
                <input type="search" name="tbusca" id="search-box" placeholder="Busque aqui..." required>
                <button type="submit" class="fas fa-search"></button>
            </form>
        </div>
    </header>
    <!--header end-->

    @yield('conteudo')

    <!--btn top-->
    <a href="#top" class="fas fa-angle-up" id="scroll-top"></a>
    <!--btn top end-->

    <!--footer-->
    <footer class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Encontra-nos aqui</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod aliqua.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>Links Rápidos</h3>
                <a href="{{ route('site.index') }}" class="links"> Home</a>
                <a href="{{ route('site.sobre') }}" class="links"> Sobre</a>
                <a href="{{ route('site.contato') }}" class="links"> Contato</a>
                <a href="{{ route('site.index') }}" class="links"> Política de privacidade</a>
            </div>

            <div class="box">
                <h3>Categorias</h3>
                <a href="{{ route('site.categoria') }}" class="links"> Notícias</a>
                <a href="{{ route('site.categoria') }}" class="links"> Entretenimento</a>
                <a href="{{ route('site.categoria') }}" class="links"> Desporto</a>
            </div>

            <div class="box">
                <h3>Newsletter</h3>
                <p>Subescreva para últimas atualizações</p>
                <form action="" method="POST" autocomplete="off">
                    <input type="email" placeholder="exemplo@gmail.com" class="email" required>
                    <input type="submit" value="Subescrever" class="btn">
                </form>
            </div>
        </div>

        <div class="credit">&copy; Copyright 2024 - Criado por <span><a href="https://afonstech.netlify.app/">Nsimba
                    Afonso</a></span> | Todos os direitos reservados!</div>
    </footer>
    <!--footer end-->

    <!--script-->
    @stack('scripts')
    <script type="text/javascript" src="{{ asset('js/script.js') }}?<?= time() ?>"></script>
    <!--script end-->
</body>

</html>
