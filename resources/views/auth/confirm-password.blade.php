@extends('site.login-layout')
@section('title', 'Confirme sua senha | Blog')
@section('conteudo')
    <section class="login">
        <form action="{{ route('password.confirm') }}" method="POST" class="login-form" autocomplete="off">
            @csrf
            <h3>CONFIRME SUA SENHA</h3>
            <input type="password" name="password" placeholder="Sua senha" class="box" required>
            <input type="submit" value="Confirmar" class="btn">
        </form>
    </section>
@endsection
