@extends('site.login-layout')
@section('title', 'Redefinir Senha | Blog')
@section('conteudo')
    <section class="login">
        <form action="{{ route('password.update') }}" method="POST" class="login-form" autocomplete="off">
            @csrf
            @method('PUT')
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <h3>REDEFINIR SENHA</h3>
            <input type="email" name="email" placeholder="exemplo@gmail.com" value="{{ old('email', $request->email) }}" class="box" required>
            <input type="password" name="password" placeholder="Sua senha" class="box" required>
            <input type="password" name="password_confirmation" placeholder="Confirme sua senha" class="box" required>
            <input type="submit" value="Entrar" class="btn">
        </form>
    </section>
@endsection