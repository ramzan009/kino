@extends('layouts.main')

@include('layouts.includes.menu')

@section('content')
    @vite(['resources/js/film.js'])
    <div class="block-movie-information-film">
        <div class="block-under-movie-information-film-1">
            <div class="block-under-for-headers-film">
                <ul>
                    <li><a href="">Фильмы</a></li>
                    <li>/</li>
                    <li><a href="">Боевики</a></li>
                    <li>/</li>
                    <li>Звезда</li>
                </ul>
            </div>
            <div class="block-under-movie-information-film-2">
                <div class="block-for-video-film">
                    <video src="/img/kino.ivi.mp4"></video>
                </div>
                <div class="block-for-description-film">
                    <div class="block-film-h1-description">
                        <h1>Фильм Звезда смотреть онлайн</h1>
                    </div>
                    <div class="block-film-information">
                        <div class="block-ul-film-information">
                            <ul>
                                <li><a href="">2002</a></li>
                                <li>1 ч. 30 мин.</li>
                                <li>16+</li>
                            </ul>
                        </div>
                        <div class="block-ul-film-information-2">
                            <ul>
                                <li>Боевик</li>
                                <li>Драма</li>
                                <li>Приключения</li>
                                <li>Россия</li>
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
                                    <div class="block-rating-img-film">
                                        <a href=""><img src="/img/join.ivi.jpeg" alt=""></a>
                                        <p>Рейтинг иви</p>
                                    </div>
                                    <div class="block-rating-img-film">
                                        <a href=""><img src="/img/join.ivi.jpeg" alt=""></a>
                                        <p>Рейтинг иви</p>
                                    </div>
                                    <div class="block-rating-img-film">
                                        <a href=""><img src="/img/join.ivi.jpeg" alt=""></a>
                                        <p>Рейтинг иви</p>
                                    </div>
                                    <div class="block-rating-img-film">
                                        <a href=""><img src="/img/join.ivi.jpeg" alt=""></a>
                                        <p>Рейтинг иви</p>
                                    </div>
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
                                <div class="block-description-text-film-1">В 1949 году фильм о славном подвиге советских
                                    разведчиков, поставленный режиссером
                                    Александром Ивановым, к показу не допустили из-за безапелляционного отзыва Сталина:
                                    «Фильм отличный, конец переснять». Современный ремейк картины «Звезда», добравшейся
                                    до зрителя лишь в 1953-м, был сразу же принят «на ура»: свидетельством тому служат
                                    многочисленные кинонаграды и номинации. В нашем интернет-кинотеатре в...
                                </div>
                                <div class="block-description-text-film-2">
                                    <div class="dont-know-block">
                                        свободном доступе можно посмотреть онлайн ленту «Звезда» – военную драму 2002
                                        года, снятую по одноименной повести Эммануила Казакевича. Главные роли в новой
                                        интерпретации доверены Игорю Петренко, Алексею Панину, Артему Семакину, Алексею
                                        Кравченко, Анатолию Гущину, Амаду Мамадакову и Юрию Лагуте. Летом 1944-го
                                        Красная Армия вдохновенно продвигается к западным границам СССР. Немецкие войска
                                        упорно цепляются за каждую пядь когда-то захваченной земли. До советского
                                        командования доходят сведения, что враг планирует глобальную перегруппировку
                                        сил, а значит, необходимо срочно прояснить обстановку. Пробраться в тыл
                                        противника поручено группе молодых разведчиков.

                                        Приглашаем посмотреть фильм «Звезда» в нашем онлайн-кинотеатре в хорошем HD
                                        качестве. Приятного просмотра!
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
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
                    <a href="">
                        <div class="block-actors-img-film">
                            <img src="/img/acter.ivi.jpg" alt="">
                            <div class="block-actors-span-film-description-film">
                                <span>Евгений Антропов</span>
                            </div>
                            <p>режиссёр</p>
                        </div>
                    </a>
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
