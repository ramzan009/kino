<?php

namespace App\Http\Controllers\Web\Comment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\Create\CreateRequest;
use App\Models\Comment;
use App\Models\Film;

class CommentController extends Controller
{
    public function index($id)
    {
        $film = Film::findOrFail($id);
        $comments = Comment::query()->where('film_id', $id)
            ->with(
                'user'
            )
            ->get();
        return view('web.comment.comment', compact('film', 'comments'));
    }

    /**
     * Добавление коментария
     */
    public function store(CreateRequest $request, $film)
    {

        $data = $request->validated();
        $data['user_id'] = auth()->id();
        $data['film_id'] = $film;

        Comment::create($data);
        return redirect()->route('film', $film);

    }

}
