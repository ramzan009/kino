<div class="block-menu">
    <div class="under-block-menu">
        <div class="menu-img-a">
            <a href="/"><img class="nbl-picture" itemprop="logo" alt="Иви" data-stub="false"
                             src="https://solea-parent.dfs.ivi.ru/picture/f30745,ffffff/reposition_iviLogoPlateRounded.svg"></a>
        </div>
        <div class="under-block-menu-ul">
            <ul class="menu-ul">
                <li><a href="">Мой Иви</a></li>
                <li><a href="">Фильмы</a></li>
                <li><a href="">Сериалы</a></li>
                <li><a href="">Мультфильмы</a></li>
            </ul>
        </div>
        <div class="under-block-menu-ul-icons-search">
            <a href="#"><i class="fa-solid fa-magnifying-glass"></i>Поиск</a>
        </div>
        <div class="under-block-menu-ul-icons-bell">
            <a href=""><i class="fa-regular fa-bell"></i></a>
        </div>
        @auth()
            <div class="under-block-menu-ul-icons-user">
                <a href="{{ route('profile') }}"><i class="fa-regular fa-user"></i>{{ auth()->user()->name }}</a>
            </div>
        @endauth
        @guest()
            <div class="under-block-menu-ul-icons-user">
                <a href="{{ route('login') }}"><i class="fa-regular fa-user"></i>Войти</a>
            </div>
        @endguest
    </div>
    <div class="model-for-menu">
        <i class="fa-solid fa-xmark icons-xmark"></i>
        <div class="block-under-model-menu-value">
            <div class="block-model-input-header">
                <h1>Поиск</h1>
                <input class="input_model" name="search" placeholder="Фильмы, сериалы, жанры и персоны" type="text">
                <button class="search-button-input">Найти</button>
            </div>
            <div class="input-h1-model-1">
                <h1>Возможно, тебя заинтересует</h1>
            </div>

            <div class="block-recommendations-about-film-model">
                <div class="block-film">
                    <div class="block-under-film">

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
