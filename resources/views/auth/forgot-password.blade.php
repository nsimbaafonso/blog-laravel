@extends('layouts.login-layout')
@section('title', 'Recuperar Senha | Blog')
@section('conteudo')
    <section class="login">
        <form action="{{ route('password.email') }}" method="POST" class="login-form" autocomplete="off">
            @csrf
            <h3>RECUPERAR SENHA</h3>
            <input type="email" name="email" placeholder="exemplo@gmail.com" class="box" required>
            <input type="submit" value="Enviar Link" class="btn">
        </form>
    </section>
@endsection
