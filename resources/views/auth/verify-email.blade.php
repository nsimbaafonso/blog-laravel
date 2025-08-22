@extends('site.login-layout')
@section('title', 'Verifique seu e-mail | Blog')
@section('conteudo')
    <section class="login">
        <form action="{{ route('verification.send') }}" method="POST" class="login-form" autocomplete="off">
            @csrf
            <h3>VERIFIQUE SEU E-MAIL</h3>
            <p>Um link de verificação foi enviado para o seu e-mail.</p>
            <input type="submit" value="Reenviar Link" class="btn">
        </form>
    </section>
@endsection