@extends('layouts.main')

@include('layouts.includes.menu')

@section('content')

<div class="block-login">
    <div class="block-under-login">
        <div class="block-header-login">
            <h1>Вход</h1>
        </div>
        <div class="block-login-input">
            <div class="block-login-input-1">
                <p>Почта</p>
                <input type="text" placeholder="Введите почту...">
            </div>
            <div class="block-login-input-2">
                <p>Пароль</p>
                <input type="text" placeholder="Введите пароль...">
                <a href="{{ route('register') }}">Зарегистрироваться</a>
            </div>
            <button class="class-login-button">Вход</button>
        </div>
    </div>
</div>

@endsection
