@extends('layouts.main')

@include('layouts.includes.menu')

@section('content')

    <div class="block-login">
        <div class="block-under-login">
            <div class="block-header-login">
                <h1>Вход</h1>
            </div>

            <form method="POST" action="">
                @csrf
                <div class="block-login-input">
                    <div class="block-login-input-1">
                        <p>Почта</p>
                        @error('email')
                        <label class="error-label" for="form2Example18">{{ $message }}</label>
                        @enderror
                        <input name="email" type="email" value="{{ old('email') }}" placeholder="Введите почту...">
                    </div>
                    <div class="block-login-input-2">
                        <p>Пароль</p>
                        @error('password')
                        <label class="error-label" for="form2Example18">{{ $message }}</label>
                        @enderror
                        <input name="password" type="password" placeholder="Введите пароль...">
                        <a href="{{ route('register') }}">Зарегистрироваться</a>
                    </div>
                    <button type="submit" class="class-login-button">Вход</button>
                </div>
            </form>

        </div>
    </div>

@endsection
