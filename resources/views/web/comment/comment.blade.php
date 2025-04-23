@extends('layouts.main')

@include('layouts.includes.menu')

@section('content')

    <div class="block-comment">
        <div class="block-under-comment">
            <div class="block-comment-header">
                <h1>Отзывы на фильм {{ $film->name }}</h1>
            </div>
            <div class="block-for-information-comment">
                <form action="{{ route('comment_store', $film->id) }}" method="POST">
                    @csrf
                    <div class="block-for-input-comment">
                        <i class="fa-regular fa-user icon-user-comment"></i>
                        <input name="comment" type="text">
                        <button type="submit">Отправить</button>
                    </div>

                </form>
                @foreach($comments as $comment)
                    <div class="block-written-comments">
                        <div class="block-name-user-and-like-and-data-comment">
                            <div class="block-letter-name-user-comment">
                                <h1>P</h1>
                            </div>
                            <div class="block-user-name-comment-1">
                                <p>{{ $comment->user->name }}</p>
                                <h5>{{ $comment->created_at->translatedFormat('H F Y') }}</h5>
                            </div>
                            <div class="block-i-like-comment">
                                <a href=""><i class="fa-regular fa-thumbs-up"></i></a>
                                <p>44</p>
                                <a href=""><i class="fa-regular fa-thumbs-down"></i></a>
                            </div>
                        </div>
                        <div class="block-comment-p-dont-know">
                            <p style="color: #f0f3f9">{{ $comment->comment }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('layouts.includes.footer')
@endsection
