@extends('layouts.main')

@include('layouts.includes.menu')

@section('content')
    @vite(['resources/js/film.js'])

    <div class="block-movie-information-film">
        <div class="block-under-movie-information-film-1">
            <div class="block-under-for-headers-film">
                <ul>
                    <li><a href="">{{ $film->type->name }}</a></li>
                    <li>/</li>
                    <li><a href="">{{ $film->genres->first()->name }}</a></li>
                    <li>/</li>
                    <li><a href="">{{ $film->name}}</a></li>
                </ul>
            </div>
            <div class="block-under-movie-information-film-2">
                <div class="block-for-video-film">
                    <video src="/img/kino.ivi.mp4"></video>
                </div>
                <div class="block-for-description-film">
                    <div class="block-film-h1-description">
                        <h1>Фильм {{ $film->name }} смотреть онлайн</h1>
                    </div>
                    <div class="block-film-information">
                        <div class="block-ul-film-information">
                            <ul>
                                <li><a href="">{{ $film->date_publication }}</a></li>
                                <li>1 ч. 30 мин.</li>
                                <li>16+</li>
                            </ul>
                        </div>
                        <div class="block-ul-film-information-2">
                            <ul>
                                @foreach($film->genres as $genre)
                                <li>{{ $genre->name }}</li>
                                @endforeach
                                    <li>{{ $film->country->name }}</li>
                            </ul>
                        </div>
                        <div class="block-ul-film-information-3">
                            <ul>
                                <li class="full-li-film">FullHD</li>
                                <li><i class="fa-solid fa-volume-low"></i>PYC</li>
                                <li><i class="fa-regular fa-closed-captioning"></i>PYC Al</li>
                            </ul>
                        </div>
                        <div class="block-rating-film">
                            <div class="block-under-rating-film">
                                <div class="block-rating-value-film">
                                    <div class="block-rating-a-film">
                                        <div class="block-background-color-film">
                                            <div class="block-under-background-color-film">
                                                <a href="">7,8</a>
                                            </div>
                                        </div>
                                        <p>Рейтинг иви</p>
                                    </div>
                                    @for($i = 0; $i < 4; $i++)
                                        <div class="block-rating-img-film">
                                            <a href=""><img src="/img/join.ivi.jpeg" alt=""></a>
                                            <p>{{ $film->authors[$i]->name}}</p>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                        <div class="block-for-favorites-film">
                            <div class="block-for-favorites-film-button">
                                <button><i class="fa-regular fa-bookmark description-favorites"></i>Буду смотреть
                                </button>
                            </div>
                            <div class="block-for-favorites-film-a-i">
                                <a href=""><i class="fa-solid fa-share"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="block-description-about-the-film-big">
                        <div class="block-under-description-about-the-film-value">
                            <div class="block-description-text-film">
                                <div class="block-description-text-film-1">
                                    {{ mb_substr($film->description, 0, 350) }}
                                </div>
                                <div class="block-description-text-film-2">
                                    <div class="dont-know-block">
                                        {{ mb_substr($film->description, 350 ) }}
                                    </div>
                                    <div class="block-language-film">
                                        <h1>Языки</h1>
                                        <p>Русский</p>
                                    </div>
                                    <div class="block-subtitles-film">
                                        <h1>Субтитры</h1>
                                        <p>Русский AI</p>
                                    </div>
                                    <div class="block-setting-explanations-film">
                                        <p>
                                            <span>Изображение и звук. </span>
                                            Фактическое качество зависит от устройства и ограничений правообладателя.
                                        </p>
                                    </div>
                                </div>
                                <span class="button-details-film">Детали о фильме</span>
                            </div>
                            <a href="">
                                <div class="block-for-estimates-film">
                                    <div class="block-for-estimates-value-film">
                                        <div class="block-integer-estimates-film">
                                            <h1>7,8</h1>
                                        </div>
                                        <div class="block-text-estimates-film">
                                            <h1>Рейтинг Иви</h1>
                                            <p>Интересный сюжет</p>
                                            <span>26 290 оценок</span>
                                        </div>
                                        <div class="block-button-estimates-film">
                                            <button>Оценить</button>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-actors-in-information-film">
                <div class="block-header-actors-film">
                    <div class="block-actors-and-creators-film">
                        <h1>Актёры и создатели</h1>
                    </div>
                    <div class="block-see-all-actors-film">
                        <a href="">Смотреть все</a>
                    </div>
                </div>
                <div class="block-information-about-actors">
                    @foreach($film->authors as $author)
                        <a href="">
                            <div class="block-actors-img-film">
                                <img src="/img/acter.ivi.jpg" alt="">
                                <div class="block-actors-span-film-description-film">
                                    <span>{{ $author->name }}</span>
                                </div>
                                <p>актер</p>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="dont-know-what-to-name-the-block-anymore">
                <div class="block-includes-film-1">
                    <h1>С сериалом «Тайфун» смотрят</h1>
                </div>
                <div class="block-film">
                    <div class="block-under-film">
                        <a href="">
                            <div class="block-films">
                                <div class="film">
                                    <div class="block-window">
                                        <div class="block-under-window">
                                            <div class="icons-window">
                                                <div class="icons-window-bookmark">
                                                    <i class="fa-regular fa-bookmark"></i>
                                                </div>
                                                <div class="icons-window-square">
                                                    <i class="fa-regular fa-share-from-square"></i>
                                                </div>
                                                <div class="icons-window-star">
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="icons-window-eye-slash">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-under-window-1">
                                            <div class="block-window-information">
                                                <h1>0,9</h1>
                                                <span>1982</span>
                                                <span>СССР</span><br>
                                                <span>Драмы</span>
                                                <h5>91 минут</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="../img/thumbs.jpg">
                                </div>
                                <div class="title-film">
                                    <p>Белорусский вокзал </p>
                                </div>
                                <div class="text-p">
                                    <p>Подписка</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="block-films">
                                <div class="film">
                                    <div class="block-window">
                                        <div class="block-under-window">
                                            <div class="icons-window">
                                                <div class="icons-window-bookmark">
                                                    <i class="fa-regular fa-bookmark"></i>
                                                </div>
                                                <div class="icons-window-square">
                                                    <i class="fa-regular fa-share-from-square"></i>
                                                </div>
                                                <div class="icons-window-star">
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="icons-window-eye-slash">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-under-window-1">
                                            <div class="block-window-information">
                                                <h1>0,9</h1>
                                                <span>1982</span>
                                                <span>СССР</span><br>
                                                <span>Драмы</span>
                                                <h5>91 минут</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="../img/thumbs.jpg">
                                </div>
                                <div class="title-film">
                                    <p>Белорусский вокзал </p>
                                </div>
                                <div class="text-p">
                                    <p>Подписка</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="block-films">
                                <div class="film">
                                    <div class="block-window">
                                        <div class="block-under-window">
                                            <div class="icons-window">
                                                <div class="icons-window-bookmark">
                                                    <i class="fa-regular fa-bookmark"></i>
                                                </div>
                                                <div class="icons-window-square">
                                                    <i class="fa-regular fa-share-from-square"></i>
                                                </div>
                                                <div class="icons-window-star">
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="icons-window-eye-slash">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-under-window-1">
                                            <div class="block-window-information">
                                                <h1>0,9</h1>
                                                <span>1982</span>
                                                <span>СССР</span><br>
                                                <span>Драмы</span>
                                                <h5>91 минут</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="../img/thumbs.jpg">
                                </div>
                                <div class="title-film">
                                    <p>Белорусский вокзал </p>
                                </div>
                                <div class="text-p">
                                    <p>Подписка</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="block-films">
                                <div class="film">
                                    <div class="block-window">
                                        <div class="block-under-window">
                                            <div class="icons-window">
                                                <div class="icons-window-bookmark">
                                                    <i class="fa-regular fa-bookmark"></i>
                                                </div>
                                                <div class="icons-window-square">
                                                    <i class="fa-regular fa-share-from-square"></i>
                                                </div>
                                                <div class="icons-window-star">
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="icons-window-eye-slash">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-under-window-1">
                                            <div class="block-window-information">
                                                <h1>0,9</h1>
                                                <span>1982</span>
                                                <span>СССР</span><br>
                                                <span>Драмы</span>
                                                <h5>91 минут</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="../img/thumbs.jpg">
                                </div>
                                <div class="title-film">
                                    <p>Белорусский вокзал </p>
                                </div>
                                <div class="text-p">
                                    <p>Подписка</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="block-films">
                                <div class="film">
                                    <div class="block-window">
                                        <div class="block-under-window">
                                            <div class="icons-window">
                                                <div class="icons-window-bookmark">
                                                    <i class="fa-regular fa-bookmark"></i>
                                                </div>
                                                <div class="icons-window-square">
                                                    <i class="fa-regular fa-share-from-square"></i>
                                                </div>
                                                <div class="icons-window-star">
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="icons-window-eye-slash">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-under-window-1">
                                            <div class="block-window-information">
                                                <h1>0,9</h1>
                                                <span>1982</span>
                                                <span>СССР</span><br>
                                                <span>Драмы</span>
                                                <h5>91 минут</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="../img/thumbs.jpg">
                                </div>
                                <div class="title-film">
                                    <p>Белорусский вокзал </p>
                                </div>
                                <div class="text-p">
                                    <p>Подписка</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="block-films">
                                <div class="film">
                                    <div class="block-window">
                                        <div class="block-under-window">
                                            <div class="icons-window">
                                                <div class="icons-window-bookmark">
                                                    <i class="fa-regular fa-bookmark"></i>
                                                </div>
                                                <div class="icons-window-square">
                                                    <i class="fa-regular fa-share-from-square"></i>
                                                </div>
                                                <div class="icons-window-star">
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="icons-window-eye-slash">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-under-window-1">
                                            <div class="block-window-information">
                                                <h1>0,9</h1>
                                                <span>1982</span>
                                                <span>СССР</span><br>
                                                <span>Драмы</span>
                                                <h5>91 минут</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="../img/thumbs.jpg">
                                </div>
                                <div class="title-film">
                                    <p>Белорусский вокзал </p>
                                </div>
                                <div class="text-p">
                                    <p>Подписка</p>
                                </div>
                            </div>
                        </a>
                        <a href="">
                            <div class="block-films">
                                <div class="film">
                                    <div class="block-window">
                                        <div class="block-under-window">
                                            <div class="icons-window">
                                                <div class="icons-window-bookmark">
                                                    <i class="fa-regular fa-bookmark"></i>
                                                </div>
                                                <div class="icons-window-square">
                                                    <i class="fa-regular fa-share-from-square"></i>
                                                </div>
                                                <div class="icons-window-star">
                                                    <i class="fa-regular fa-star"></i>
                                                </div>
                                                <div class="icons-window-eye-slash">
                                                    <i class="fa-solid fa-eye-slash"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block-under-window-1">
                                            <div class="block-window-information">
                                                <h1>0,9</h1>
                                                <span>1982</span>
                                                <span>СССР</span><br>
                                                <span>Драмы</span>
                                                <h5>91 минут</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="../img/thumbs.jpg">
                                </div>
                                <div class="title-film">
                                    <p>Белорусский вокзал </p>
                                </div>
                                <div class="text-p">
                                    <p>Подписка</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="block-for-writing-comment-see">
                <div class="block-for-title-comments-film">
                    <div class="block-for-title-comments-h1-1">
                        <h1><a href="">Отзывы</a></h1>
                    </div>
                    <div class="block-for-title-comments-h1-2">
                        <a href="">
                            <button>Оставить отзыв</button>
                        </a>
                    </div>
                </div>
                <p class="block-about-p-comment-film">о сериале «Тайфун»</p>
                <div class="under-the-block-comment">
                    <div class="block-comment-text-film">
                        <div class="block-name-user-comment-film">
                            <h1>Ruslan</h1>
                        </div>
                        <div class="block-text-film">
                            Детский сад, за уши притянутый сюжет. Временами испытываешь испанский стыд за режиссера...
                            Не тратьте время понапрасну.
                        </div>
                        <div class="block-datetime-comments-and-like">
                            <div class="block-datetime-comment">
                                <p>10 сентября</p>
                            </div>
                            <div class="block-like-comment">
                                <a href=""><i class="fa-regular fa-thumbs-up"></i></a>
                                <p>4</p>
                                <a href=""><i class="fa-regular fa-thumbs-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.includes.footer')
@endsection
