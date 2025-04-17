<div class="block-film">
    <div class="block-header-film-on-the-page-index">
        <a href=""><h1>Фильмы про настоящую любовь<i class="fa-solid fa-chevron-right"></i></h1></a>
    </div>
    <div class="block-under-film">
        @foreach($items as $item)
            <a href="{{ route('film', $item->id) }}">
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
                        <p>{{ $item->name }}</p>
                    </div>
                    <div class="text-p">
                        <p>Бесплатно</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
