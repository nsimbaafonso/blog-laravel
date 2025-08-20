@extends('site.layout')
@section('title', 'Post | Blog')
@section('conteudo')
    <!--post-->
    <main class="main post-unico">
        <section>
            <article class="animar shine">
                <img class="fade-in" src="img/blog-1.jpg" alt="Imagem do Post">
                <h1>Título do Post</h1>
                <p><strong>Publicado em:</strong> 23 Julho 2025</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse potenti.
                    Morbi facilisis ex at ligula tristique, vitae feugiat erat vulputate. Nullam
                    fringilla sem ut sapien venenatis, vitae vulputate lectus pretium.</p>

                <p>Phasellus bibendum urna sit amet nunc scelerisque, quis bibendum urna blandit.
                    Donec dignissim semper nisl, sed pretium ligula rhoncus id. Vestibulum ac enim
                    dapibus, vehicula erat vitae, pulvinar nulla.</p>

                <!-- Botões de compartilhamento -->
                <div class="compartilhar">
                    <span>Compartilhar:</span>
                    <a class="fab fa-whatsapp" id="whatsapp" target="_blank" title="WhatsApp" rel="noopener"></a>
                    <a class="fab fa-twitter" id="twitter" target="_blank" title="Twitter" rel="noopener"></a>
                    <a class="fab fa-linkedin" id="linkedin" target="_blank" title="LinkedIn" rel="noopener"></a>
                    <a class="fab fa-facebook-f" id="facebook" target="_blank" title="Facebook" rel="noopener"></a>
                </div>
            </article>
        </section>

        <aside>
            <div class="posts-lidos">
                <h3>Você também pode gostar</h3>
                <ul>
                    <li>
                        <img src="img/blog-1.jpg" alt="">
                        <a href="#">Como criar um layout moderno</a>
                    </li>
                    <li>
                        <img src="img/blog-2.jpg" alt="">
                        <a href="#">Dicas de produtividade para devs</a>
                    </li>
                    <li>
                        <img src="img/blog-3.jpg" alt="">
                        <a href="#">Design UX para iniciantes</a>
                    </li>
                </ul>
            </div>
        </aside>
    </main>
    <!--posts end-->

    <!--posts slides-->
    <section class="posts-slides" id="blogs">
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
    <link rel="stylesheet" href="css/post.css">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/swiper-bundle.min.js') }}?<?= time() ?>"></script>
    <script type="text/javascript" src="{{ asset('js/posts-slider.js') }}?<?= time() ?>"></script>
    <script type="text/javascript" src="{{ asset('js/share.js') }}?<?= time() ?>"></script>
@endpush
