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
                /**
                 * это отношению, function доробатывает запрос.
                 */
                'comments' => function ($query) {
                $query->limit(5);
                }
            ])
            ->findOrFail($id);

        $film_genres = Film::query()->where('id', '!=', $film->id)->whereHas('genres', function ($query) use ($film) {
           $query->whereIn('id', $film->genres->pluck('id'));
        })->get();
        return view('web.film.film', compact('film', 'film_genres'));
    }
}

