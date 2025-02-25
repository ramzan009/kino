{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        Панель управления</a></li>
<x-backpack::menu-item title="Фильмы" :link="backpack_url('film')"/>
<x-backpack::menu-item title="Страны" :link="backpack_url('country')"/>
<x-backpack::menu-item title="Типы" :link="backpack_url('type')"/>
<x-backpack::menu-item title="Комментарии" :link="backpack_url('comment')"/>
<x-backpack::menu-item title="Рейтинги" :link="backpack_url('rating')"/>
<x-backpack::menu-item title="Жанры" :link="backpack_url('genre')"/>
<x-backpack::menu-item title="Пользователи" :link="backpack_url('user')"/>
<x-backpack::menu-item title="Авторы" :link="backpack_url('author')"/>
