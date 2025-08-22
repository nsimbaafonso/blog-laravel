@extends('layouts.login-layout')
@section('title', 'Login | Blog')
@section('conteudo')
    <section class="login">
        <form action="{{ route('login') }}" method="POST" class="login-form" autocomplete="off">
            @csrf
            <h3>PAINEL ADMINISTRATIVO</h3>
            <input type="email" name="email" placeholder="exemplo@gmail.com" class="box" required>
            <input type="password" name="password" placeholder="Sua Palavra-Pass" class="box" required>
            <div class="remember">
                <input type="checkbox" name="remember_me" id="lembrar">
                <label for="lembrar">Lembrar de mim</label>
            </div>
            <input type="submit" value="Entrar" class="btn">
            <p>Esqueceu a palavra-pass? <a href="{{ route('password.request') }}">clica aqui</a></p>
        </form>
    </section>
@endsection
