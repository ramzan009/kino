<?php

namespace App\Http\Controllers\Web\Register;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Models\User;
use function Laravel\Prompts\password;

class RegisterController extends Controller
{
    public function register()
    {
        return view('web.register.register');
    }

    /**
     * Создание пользователя
     */
    public function create(UserCreateRequest $request)
    {
        $data = $request->validated();

        $user = User::query()->create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        if ($user) {
            auth("web")->login($user);
        }

        return redirect(route('main'));
    }

}
