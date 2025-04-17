@extends('layouts.main')

@include('layouts.includes.menu')


@section('content')

    <div class="block-register">
        <div class="block-under-register">
            <div class="block-header-register">
                <h1>Регистрация</h1>
            </div>

            <form method="POST" action="{{ route('registration_process') }}">
                @csrf
                <div class="block-register-input">
                    <div class="block-register-input-1">
                        <p>Имя</p>
                        @error('name')
                        <label class="error-label" for="form2Example18">{{ $message }}</label>
                        @enderror
                        <input name="name" type="text" value="{{ old('name') }}" placeholder="Введите имя...">
                    </div>
                    <div class="block-register-input-1">
                        <p>Почта</p>
                        @error('email')
                        <label class="error-label" for="form2Example18">{{ $message }}</label>
                        @enderror
                        <input name="email" type="email" value="{{ old('email') }}" placeholder="Введите Почта...">
                    </div>
                    <div class="block-register-input-1">
                        <p>Пароль</p>
                        @error('password')
                        <label class="error-label" for="form2Example18">{{ $message }}</label>
                        @enderror
                        <input name="password" type="password" value="{{ old('password') }}" placeholder="Введите Пароль...">
                    </div>
                    <div class="block-register-input-1">
                        <p>Подтвердите пароль</p>
                        @error('password_confirmation')
                        <label class="error-label" for="form2Example18">{{ $message }}</label>
                        @enderror
                        <input name="password_confirmation" type="password" value="{{ old('password_confirmation') }}" placeholder="Введите пароль...">
                    </div>
                    <a class="tag-back-register" href="{{ route('login') }}">На страницу вход</a>
                    <button type="submit" class="class-register-button">Регистрироваться</button>
                </div>
            </form>

        </div>
    </div>

@endsection
