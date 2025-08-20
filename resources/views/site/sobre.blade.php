@extends('site.layout')
@section('title', 'Sobre | Blog')
@section('conteudo')
    <!--sobre-->
    <section class="sobre">
        <div class="content">
            <h3>Sobre o Blog</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
        </div>
    </section>
    <!--sobre end-->

    <!--about-->
    <section class="about">
        <h1 class="heading">Sobre <span>Nós</span></h1>
        <div class="row">
            <div class="image">
                <img src="{{ asset('img/sobre.jpg') }}" alt="Sobre nós" title="Sobre nós">
            </div>

            <div class="content">
                <span>Seja bem-vindo ao nosso blog</span>
                <h3>Desde 2024. Acreditamos que o jornalismo transparente é importante.</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse nesciunt impedit voluptatibus! Ipsam
                    veniam, amet aliquid mollitia odio, aliquam iure error deserunt sint nobis eius vitae, blanditiis ex
                    commodi molestias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis consequatur
                    nostrum culpa rem debitis sequi accusantium pariatur placeat, facere, accusamus ullam. Facilis alias
                    consequuntur natus voluptates. Commodi incidunt asperiores a.
                </p>
            </div>
        </div>
    </section>
    <!--about end-->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/sobre.css') }}?<?= time() ?>">
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}?<?= time() ?>">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/swiper-bundle.min.js') }}?<?= time() ?>"></script>
@endpush
