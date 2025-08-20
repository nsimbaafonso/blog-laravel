@extends('site.layout')
@section('title', '500 | Blog')
@section('conteudo')
    <!--erro-->
    <section class="erro d-flex">
        <div class="content">
            <h1>500</h1>
            <p>Ops! Erro no sistema.</p>
            <div class="d-flex">
                <a href="{{ route('site.index') }}" class="btn">Voltar Para Home</a>
            </div>
        </div>
    </section>
    <!--erro end-->
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}?<?= time() ?>">
@endpush

@push('scripts')
    <script type="text/javascript" src="{{ asset('js/swiper-bundle.min.js') }}?<?= time() ?>"></script>
@endpush
