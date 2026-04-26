@php
    $nav_elements = [
        ['name' => 'HOME', 'url' => 'home'],
        ['name' => 'COMICS', 'url' => 'comics'],
        ['name' => 'ABOUT US', 'url' => 'about-us'],
        ['name' => 'SHOP', 'url' => 'shop']
    ]
@endphp

<header>
    <nav class="navbar navbar-expand-lg bg-white border-bottom">
        <!-- Logo -->
        <a class="navbar-brand"
           href="#">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}"
                 alt="DC Logo"
                 height="50">
        </a>
        <!-- Toggle mobile -->
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end"
             id="navbarNav">
            <ul class="navbar-nav align-items-center gap-3">
                @foreach ($nav_elements as $cur_elem)
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs($cur_elem['url']) ? 'active' : '' }}"
                           href="{{ route($cur_elem['url']) }}">{{ $cur_elem['name'] }}</a>
                    </li>
                @endforeach
            </ul>
    </nav>
</header>