@extends('layouts.app')

@section('content')
    <div class="banner-slider">
        <div class="banner-slider__slides">
            <div class="banner-slider__slide">
                <div class="banner">
                    <h1 class="banner__title">Бонус за регистрацию</h1>
                    <p class="banner__text">до 500€ + 200 FS</p>
                    <a href="#" class="banner__button">Зарегистрироваться сейчас</a>
                </div>
            </div>
            <div class="banner-slider__slide">
                <div class="banner banner--second">
                    <h1 class="banner__title">Еженедельный кэшбэк</h1>
                    <p class="banner__text">до 15% на все игры</p>
                    <a href="#" class="banner__button">Узнать больше</a>
                </div>
            </div>
            <div class="banner-slider__slide">
                <div class="banner banner--third">
                    <h1 class="banner__title">Турнир на миллион</h1>
                    <p class="banner__text">Участвуй и выигрывай!</p>
                    <a href="#" class="banner__button">Присоединиться</a>
                </div>
            </div>
        </div>
        <button class="banner-slider__control banner-slider__control--prev">❮</button>
        <button class="banner-slider__control banner-slider__control--next">❯</button>
    </div>

    <section class="page-content">
        <h1 class="page-content__title">Страница: {{ $slug ?? 'Не определён' }}</h1>
        <p class="page-content__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </section>
@endsection
