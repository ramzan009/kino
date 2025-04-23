<?php

namespace App\Http\Controllers\Web\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        return view('web.profile.profile', compact('user'));
    }

    /**
     * Метод для изменения профиля
     */
    public function edit()
    {
        $user = Auth::user();
        return view('web.profile.edit', compact('user'));
    }

    /**
     * Метод для удаления аккаунта
     */
    public function delete(): RedirectResponse
    {
        /** @var User $user */

        $user = Auth::user();
        $user->delete();
        Auth::logout();
        return redirect()->route('main');
    }

    /**
     * Метод для изменения данные
     */
    public function profileUpdate(ProfileUpdateRequest $request): RedirectResponse
    {
        $data = $request->validated();

        /** @var User $user */
        $user = Auth::user();

        /**
         * Проверка на пустату колонку old_password, если пустой изменить name и email.
         */
        if (empty($data['old_password'])) {
            $user->update([
                'name'  => $data['name'],
                'email' => $data['email'],
            ]);

            return redirect()->back()->with('success', 'Данные успешно изменены!');
        }

        /**
         * Проверка на слвпадения пароля
         */
        if (!Hash::check($data['old_password'], $user->password)) {
            return redirect()->back()->withErrors(['error' => 'Старый пароль не правильный!']);
        }

        /**
         * изменения данные
         */
        $user->update([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password'])
        ]);

        return redirect()->back()->with('success', 'Данные и пароль успешно изменены!');
    }


}
