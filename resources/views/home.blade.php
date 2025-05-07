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

    <section class="slot-section">
        <h2 class="slot-section__title">Добавить новый слот</h2>
        <div class="slot-section__form">
            <form action="{{ route('slots.store') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="slot-section__error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="slot-section__field">
                    <label for="name" class="slot-section__label">Название</label>
                    <input type="text" name="name" id="name" class="slot-section__input" placeholder="Название слота" required>
                </div>
                <div class="slot-section__field">
                    <label for="slug" class="slot-section__label">Слаг</label>
                    <input type="text" name="slug" id="slug" class="slot-section__input" placeholder="Слаг слота" required>
                </div>
                <div class="slot-section__field">
                    <label for="image_url" class="slot-section__label">URL изображения</label>
                    <input type="url" name="image_url" id="image_url" class="slot-section__input" placeholder="https://example.com/image.jpg" required>
                </div>
                <button type="submit" class="slot-section__submit">Добавить</button>
            </form>
        </div>
    </section>

    <div class="slot-grid">
        @foreach($slots as $slot)
            <div class="slot-grid__item">
                <div class="slot-card">
                    <img src="{{ $slot->image_url }}" alt="{{ $slot->name }}" class="slot-card__image">
                    <div class="slot-card__body">
                        <h3 class="slot-card__title">{{ $slot->name }}</h3>
                        <form action="{{ route('slots.destroy', $slot->id) }}" method="POST" onsubmit="return confirm('Удалить слот?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="slot-card__delete">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
