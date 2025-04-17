<?php

namespace App\Http\Controllers\Web\Comment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return view('web.comment.comment');
    }
}
