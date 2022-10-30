@extends('admin.layouts.main')

@section('title')
@parent Добавить новость
@endsection

@section('header')
@include('admin.components.header')
@endsection

@section('menu')
@include('admin.components.menu')
@endsection

@section('content')
<main class="container py-5">
    @include('admin.components.message')

    <form class="add-news card border-0 mx-auto" action="{{ route('admin.news.update', ['news' => $news]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p class="bg-secondary p-3 bg-gradient text-white">Редактировать новость</p>
        <div class="card-body">
            <div class="form-floating mb-3">
                <select class="form-select" name="category_id" id="categoryNews" aria-label="Выбор категории">
                    @forelse($categories as $item)
                    <option @if ($news->category_id==$item->id) selected @endif value="{{ $item->id }}">
                        {{ $item->title }}
                    </option>
                    @empty
                    <option value="0">
                        Нет категорий
                    </option>
                    @endforelse
                </select>
                <label for="categoryNews">
                    Категория новости
                </label>
            </div>

            <label class="mb-3">
                <input class="form-check-input" type="checkbox" value="{{$news->is_private}}" name="is_private" {{$news->is_private == 1 ? 'checked' : ''}}> Приватная новость
            </label>

            <div class="form-floating">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Заголовок новости" name="title" id="titleNews" value="{{ $news->title }}">
                <label for="titleNews">
                    Заголовок новости
                </label>
            </div>

            <div class="form-floating">
                <textarea class="add-news__textarea form-control form-control-lg mb-3" name="description" placeholder="Краткое описание новости" id="description">{{ $news->description }}</textarea>
                <label for="description">
                    Краткое описание новости
                </label>
            </div>

            <div class="form-floating">
                <textarea class="add-news__textarea form-control form-control-lg mb-3" name="text" placeholder="Новость" id="newsText">{{ $news->text }}</textarea>
                <label for="newsText">
                    Новость
                </label>
            </div>

            <div class="mb-3">
                <label for="newsImage" class="form-label">Загрузка фотографии</label>
                <input class="form-control" type="file" id="newsImage" name="image">
            </div>

            <div class="mt-5 mb-4">
                <button class="btn-outline-secondary btn bg-gradient btn-lg w-100" type="submit" dusk="update-news">
                    Сохранить
                </button>
            </div>
        </div>
    </form>
</main>
@endsection
