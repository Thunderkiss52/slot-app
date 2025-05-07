<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Олимп Casino</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="header__container">
        <div class="header__inner">
            <a href="/" class="header__logo">Олимп Casino</a>
            <nav class="header__nav">
                <a href="#" class="header__nav-link header__nav-link--login">Войти</a>
                <a href="#" class="header__nav-link header__nav-link--register">Регистрация</a>
            </nav>
        </div>
    </div>
</header>

<div class="layout">
    <aside class="sidebar">
        <nav class="sidebar__nav">
            <ul class="sidebar__nav-list">
                <li class="sidebar__nav-item"><a href="/" class="sidebar__nav-link">Главная</a></li>
                <li class="sidebar__nav-item"><a href="/casino" class="sidebar__nav-link">Казино</a></li>
                <li class="sidebar__nav-item"><a href="/live-casino" class="sidebar__nav-link">Live Казино</a></li>
                <li class="sidebar__nav-item"><a href="/jackpots" class="sidebar__nav-link">Джекпоты</a></li>
                <li class="sidebar__nav-item"><a href="/sports" class="sidebar__nav-link">Спорт</a></li>
                <li class="sidebar__nav-item"><a href="/live-sports" class="sidebar__nav-link">Live Ставки</a></li>
            </ul>
        </nav>
    </aside>
    <main class="main-content">
        @yield('content')
    </main>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
