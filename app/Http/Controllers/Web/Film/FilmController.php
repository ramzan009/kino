<?php

namespace App\Http\Controllers\Web\Film;

use App\Http\Controllers\Controller;
use App\Models\Film;

class FilmController extends Controller
{
    public function film($id)
    {
        $film = Film::query()
            ->with([
                    'authors',
                    'genres',
            ])
            ->findOrFail($id);
        return view('web.film.film', compact('film'));
    }
}

