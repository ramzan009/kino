<?php

namespace App\Http\Controllers\Web\Register;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('web.register.register');
    }
}
