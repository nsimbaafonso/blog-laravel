@extends('layouts.site-layout')
@section('title', 'Blog')
@section('conteudo')
    <!--home-->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background: url({{ asset('img/blog-1.jpg') }}) no-repeat;">
                    <div class="content">
                        <h3><a href="{{ route('site.post') }}">Lorem ipsum dolor sit amet</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url({{ asset('img/blog-2.jpg') }}) no-repeat;">
                    <div class="content">
                        <h3><a href="{{ route('site.post') }}">Lorem ipsum dolor sit amet</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url({{ asset('img/blog-3.jpg') }}) no-repeat;">
                    <div class="content">
                        <h3><a href="{{ route('site.post') }}">Lorem ipsum dolor sit amet</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background: url({{ asset('img/blog-1.jpg') }}) no-repeat;">
                    <div class="content">
                        <h3><a href="{{ route('site.post') }}">Lorem ipsum dolor sit amet</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--home end-->

    <!--main-->
    <main class="main">
        <!-- CONTEÚDO PRINCIPAL -->
        <section>
            <article class="animar shine">
                <img src="{{ asset('img/blog-1.jpg') }}" alt="Imagem Post 1">
                <h2><a href="{{ route('site.post') }}">Postagem 1</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum sem in lorem accumsan...</p>
            </article>
            <article class="animar shine">
                <img src="{{ asset('img/blog-2.jpg') }}" alt="Imagem Post 2">
                <h2><a href="{{ route('site.post') }}">Postagem 2</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum sem in lorem accumsan...</p>
            </article>
            <article class="animar shine">
                <video src="{{ asset('video/Imagine Dragons - Believer [Tradução-Legendado] [Riverdale- Cheryl Blossom].mp4') }}" controls
                    loop poster="img/blog-3.jpg" class="video-play"></video>
                <h2><a href="{{ route('site.post') }}">Postagem 3</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque bibendum sem in lorem accumsan...</p>
            </article>

            <!-- PUBLICIDADE -->
            <div class="publicidade">
                <h2>Publicidade</h2>
                <div class="swiper publicidade-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide shine">
                            <img src="{{ asset('img/blog-1.jpg') }}" alt="Publicidade 1">
                        </div>
                        <div class="swiper-slide shine">
                            <img src="{{ asset('img/blog-2.jpg') }}" alt="Publicidade 2">
                        </div>
                        <div class="swiper-slide shine">
                            <img src="{{ asset('img/blog-3.jpg') }}" alt="Publicidade 3">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <!-- SIDEBAR -->
        <aside>
            <div class="sobre-blog">
                <img src="{{ asset('img/sobre.jpg') }}" alt="Sobre o blog">
                <h3>Sobre o Blog</h3>
                <p>Um espaço para compartilhar conhecimento em tecnologia, design e programação.</p>
            </div>
            <div class="posts-lidos">
                <h3>Posts mais lidos</h3>
                <ul>
                    <li>
                        <img src="{{ asset('img/blog-1.jpg') }}" alt="Post mais lido 1">
                        <a href="{{ route('site.post') }}">Como criar um layout moderno</a>
                    </li>
                    <li>
                        <img src="{{ asset('img/blog-2.jpg') }}" alt="Post mais lido 2">
                        <a href="{{ route('site.post') }}">Dicas de produtividade para devs</a>
                    </li>
                    <li>
                        <img src="{{ asset('img/blog-3.jpg') }}" alt="Post mais lido 3">
                        <a href="{{ route('site.post') }}">Design UX para iniciantes</a>
                    </li>
                </ul>
            </div>
        </aside>
    </main>
    <!--main end-->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}?<?= time() ?>">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/swiper-bundle.min.js') }}?<?= time() ?>"></script>
    <script type="text/javascript" src="{{ asset('js/home-slider.js') }}?<?= time() ?>"></script>
    <script type="text/javascript" src="{{ asset('js/posts-slider.js') }}?<?= time() ?>"></script>
    <script type="text/javascript" src="{{ asset('js/pub-slider.js') }}?<?= time() ?>"></script>
@endpush
