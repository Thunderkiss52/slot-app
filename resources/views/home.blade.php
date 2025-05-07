@extends('layouts.app')

@section('content')
    <div class="banner text-center py-5 mb-4">
        <h1 class="display-5 text-white">Бонус за регистрацию</h1>
        <a href="#" class="btn btn-warning">Зарегистрироваться сейчас</a>
    </div>

    <div class="card bg-dark text-white mb-4">
        <div class="card-body">
            <h5 class="card-title">Добавить новый слот</h5>
            <form action="{{ route('slots.store') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="name" class="form-label">Название</label>
                    <input type="text" name="name" id="name" class="form-control bg-secondary text-white" placeholder="Название слота" required>
                </div>
                <div class="mb-3">
                    <label for="slug" class="form-label">Слаг</label>
                    <input type="text" name="slug" id="slug" class="form-control bg-secondary text-white" placeholder="Слаг слота" required>
                </div>
                <div class="mb-3">
                    <label for="image_url" class="form-label">URL изображения</label>
                    <input type="url" name="image_url" id="image_url" class="form-control bg-secondary text-white" placeholder="https://example.com/image.jpg" required>
                </div>
                <button type="submit" class="btn btn-warning">Добавить</button>
            </form>
        </div>
    </div>

    <div class="row">
        @foreach($slots as $slot)
            <div class="col-md-2 mb-4">
                <div class="card bg-dark border-light slot-card">
                    <img src="{{ $slot->image_url }}" class="card-img-top" alt="{{ $slot->name }}" style="height: 150px; object-fit: cover;">
                    <div class="card-body p-2">
                        <h6 class="card-title text-white">{{ $slot->name }}</h6>
                        <form action="{{ route('slots.destroy', $slot->id) }}" method="POST" onsubmit="return confirm('Удалить слот?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm w-100">Удалить</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
