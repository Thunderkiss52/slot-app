<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Олимп Casino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header class="bg-dark text-white py-3">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <a href="/" class="navbar-brand text-white fw-bold">Олимп Casino</a>
            <div>
                <a href="#" class="btn btn-outline-light me-2">Войти</a>
                <a href="#" class="btn btn-warning">Регистрация</a>
            </div>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <aside class="col-md-2 bg-dark text-white p-3 sidebar">
            <ul class="nav flex-column">
                <li class="nav-item"><a href="/" class="nav-link text-white">Главная</a></li>
                <li class="nav-item"><a href="/casino" class="nav-link text-white">Казино</a></li>
                <li class="nav-item"><a href="/live-casino" class="nav-link text-white">Live Казино</a></li>
                <li class="nav-item"><a href="/jackpots" class="nav-link text-white">Джекпоты</a></li>
                <li class="nav-item"><a href="/sports" class="nav-link text-white">Спорт</a></li>
                <li class="nav-item"><a href="/live-sports" class="nav-link text-white">Live Ставки</a></li>
            </ul>
        </aside>
        <main class="col-md-10 p-4 main-content">
            @yield('content')
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
