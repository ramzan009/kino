{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> Панель управления</a></li>
<x-backpack::menu-item title="Фильмы" :link="backpack_url('film')" />
<x-backpack::menu-item title="Страны" :link="backpack_url('country')" />

