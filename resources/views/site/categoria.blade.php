@extends('site.layout')
@section('title', 'Categoria | Blog')
@section('conteudo')
    <!--categoria-->
    <section class="posts-search">
        <h3 class="title">Categoria: <span>Notícias</span></h3>

        <div class="last-post">
            <div class="box-container">
                <article class="box">
                    <div class="image shine">
                        <img src="img/blog-1.jpg" alt="Blog 1" title="Blog 1">
                    </div>
                    <div class="content">
                        <h3><a href="post.html">Duis aute irure dolor</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </article>
                <article class="box">
                    <div class="image shine">
                        <img src="img/blog-2.jpg" alt="Blog 2" title="Blog 2">
                    </div>
                    <div class="content">
                        <h3><a href="post.html">Duis aute irure dolor</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </article>
                <article class="box">
                    <div class="image shine">
                        <img src="img/blog-3.jpg" alt="Blog 3" title="Blog 3">
                    </div>
                    <div class="content">
                        <h3><a href="post.html">Duis aute irure dolor</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section>
    </section>
    <!--categoria end-->

    <!--posts slides-->
    <section class="posts-slides">
        <h2>Outros <span>Posts</span></h2>

        <div class="swiper posts-slider">
            <div class="swiper-wrapper">
                <article class="swiper-slide slide">
                    <div class="image shine">
                        <img src="img/blog-1.jpg" alt="Blog 1" title="Blog 1">
                    </div>
                    <div class="content">
                        <h3><a href="post.html">Duis aute irure dolor</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </article>
                <article class="swiper-slide slide">
                    <div class="image shine">
                        <img src="img/blog-2.jpg" alt="Blog 2" title="Blog 2">
                    </div>
                    <div class="content">
                        <h3><a href="post.html">Duis aute irure dolor</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </article>
                <article class="swiper-slide slide">
                    <div class="image shine">
                        <img src="img/blog-3.jpg" alt="Blog 3" title="Blog 3">
                    </div>
                    <div class="content">
                        <h3><a href="post.html">Duis aute irure dolor</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </article>
                <article class="swiper-slide slide">
                    <div class="image shine">
                        <img src="img/blog-1.jpg" alt="Blog 1" title="Blog 1">
                    </div>
                    <div class="content">
                        <h3><a href="post.html">Duis aute irure dolor</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </article>
                <article class="swiper-slide slide">
                    <div class="image shine">
                        <img src="img/blog-2.jpg" alt="Blog 2" title="Blog 2">
                    </div>
                    <div class="content">
                        <h3><a href="post.html">Duis aute irure dolor</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </article>
                <article class="swiper-slide slide">
                    <div class="image shine">
                        <img src="img/blog-3.jpg" alt="Blog 3" title="Blog 3">
                    </div>
                    <div class="content">
                        <h3><a href="post.html">Duis aute irure dolor</a></h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.
                        </p>
                    </div>
                </article>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!--posts slides end-->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}?<?= time() ?>">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/swiper-bundle.min.js') }}?<?= time() ?>"></script>
    <script type="text/javascript" src="js/posts-slider.js"></script>
@endpush
