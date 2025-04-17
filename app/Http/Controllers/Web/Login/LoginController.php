<?php

namespace App\Http\Controllers\Web\Login;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('web.login.login');
    }

    /**
     * Вход в аккаунт
     */
    public function login(LoginRequest $request)
    {
        $data = $request->validated();
        $user = User::query()->where('email', $data['email'])->first();

        if ($user === null) {
            return redirect()->back()->withErrors(['message' => 'Пользователь с таким email не найден']);
        }

        if (Hash::check($data['password'], $user->password)) {
            auth()->login($user);
            return redirect()->route('main');
        }
        return redirect()->back()->withErrors(['message' => 'Не удалось войти в аккаунт. Пароль не совпадает']);
    }
}
