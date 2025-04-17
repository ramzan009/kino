<?php

namespace App\Http\Controllers\Web\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index()
    {
        return view('web.profile.profile');
    }

    /**
     * Метод для изменения профиля
     */
    public function edit() {
        return view('web.profile.edit');
    }

}
