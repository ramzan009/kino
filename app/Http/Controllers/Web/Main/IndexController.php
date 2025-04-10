<?php

namespace App\Http\Controllers\Web\Main;

use App\Http\Controllers\Controller;
use App\Models\Film;

class IndexController extends Controller
{

    public function main()
    {
        $films = Film::all();
        return view('web.index.index', compact('films'));
    }
}

