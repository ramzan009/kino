<?php

namespace App\Http\Controllers\Web\Film;

use App\Http\Controllers\Controller;

class FilmController extends Controller
{
    public function film()
    {
      return view('web.film.film');
    }
}

