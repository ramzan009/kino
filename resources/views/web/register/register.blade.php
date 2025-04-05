@extends('layouts.main')

@include('layouts.includes.menu')


@section('content')

    <div class="block-register">
        <div class="block-under-register">
           <div class="block-header-register">
               <h1>Регистрация</h1>
           </div>
            <div class="block-register-input">
                <div class="block-register-input-1">
                    <p>Имя</p>
                    <input type="text" placeholder="Введите имя...">
                </div>
                <div class="block-register-input-1">
                    <p>Почта</p>
                    <input type="text" placeholder="Введите Почта...">
                </div>
                <div class="block-register-input-1">
                    <p>Пароль</p>
                    <input type="text" placeholder="Введите Пароль...">
                </div>
                <div class="block-register-input-1">
                    <p>Подтвердите пароль</p>
                    <input type="text" placeholder="Введите пароль...">
                </div>
                <a class="tag-back-register" href="{{ route('login') }}">На страницу вход</a>
                <button class="class-register-button">Регистрироваться</button>
            </div>
        </div>
    </div>

@endsection
