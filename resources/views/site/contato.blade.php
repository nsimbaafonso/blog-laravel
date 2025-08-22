@extends('layouts.site-layout')
@section('title', 'Contato | Blog')
@section('conteudo')
    <!--contatos-->
    <section class="contatos">
        <div class="content">
            <h3>Nos Contate</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
    </section>
    <!--contatos end-->

    <!--infos-->
    <section class="infos">
        <div class="info-container">
            <div class="info">
                <i class="fas fa-envelope"></i>
                <h3>Nosso Email</h3>
                <p>blog2@gmail.com</p>
            </div>

            <div class="info">
                <i class="fas fa-phone"></i>
                <h3>Nosso Telefone</h3>
                <p>+244 999999999</p>
            </div>

            <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <h3>Nosso Endereço</h3>
                <address>Angola, Luanda</address>
            </div>
        </div>
    </section>
    <!--infos end-->

    <!--contato-->
    <section class="contato">
        <div class="row">
            <div class="image"></div>

            <form action="" method="POST" class="form" id="form" autocomplete="on">
                <h3>Preencha o Formulário</h3>

                <div class="inputBox">
                    <span class="fas fa-user"></span>
                    <input type="text" name="nome" id="name" placeholder="Seu nome" required>
                </div>
                <span class="error" id="nameError"></span>

                <div class="inputBox">
                    <span class="fas fa-envelope"></span>
                    <input type="email" name="email" id="email" placeholder="exemplo@gmail.com" required>
                </div>
                <span class="error" id="emailError"></span>

                <div class="inputBox">
                    <span class="fas fa-a"></span>
                    <input type="text" name="assunto" id="assunto" placeholder="Seu assunto" required>
                </div>
                <span class="error" id="assuntoError"></span>

                <div class="inputBox">
                    <span class="fas fa-comment"></span>
                    <textarea name="msg" id="msg" cols="10" rows="30" placeholder="Sua mensagem..." required></textarea>
                </div>
                <span class="error" id="msgError"></span>

                <button type="submit" class="btn">
                    Enviar mensagem <i class="fas fa-rocket"></i>
                </button>
                <button type="reset" class="btn">
                    Limpar <i class="fas fa-trash"></i>
                </button>
            </form>
        </div>
    </section>
    <!--contato end-->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}?<?= time() ?>">
    <link rel="stylesheet" href="css/contato.css">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/swiper-bundle.min.js') }}?<?= time() ?>"></script>
@endpush
