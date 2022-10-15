@extends('admin.layouts.main')

@section('title')
@parent Добавить новость
@endsection

@section('header')
@include('admin.components.header')
@endsection

@section('content')
<main class="container py-5">
    <form class="add-news card border-0 mx-auto" action="{{ route('admin.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="bg-secondary p-3 bg-gradient text-white">Добавить новость</p>
        <div class="card-body">
            <div class="form-floating mb-3">
                <select class="form-select" name="category_id" id="categoryNews" aria-label="Выбор категории">
                    @forelse($categories as $item)
                    <option @if (old('category_news')==$item->id) selected @endif value="{{ $item->id }}">
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
                <input class="form-check-input" type="checkbox" value="1" name="is_private" @if (old('is_private')==='1' ) checked @endif> Приватная новость
            </label>

            <div class="form-floating">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Заголовок новости" name="title" id="titleNews" value="{{ old('title_news') }}">
                <label for="titleNews">
                    Заголовок новости
                </label>
            </div>

            <div class="form-floating">
                <textarea class="add-news__textarea form-control form-control-lg mb-3" name="description" placeholder="Введите краткое описание новости" id="description">{{ old('description_news') }}</textarea>
                <label for="description">
                    Введите краткое описание новости
                </label>
            </div>

            <div class="form-floating">
                <textarea class="add-news__textarea form-control form-control-lg mb-3" name="text" placeholder="Введите новость" id="newsText">{{ old('text_news') }}</textarea>
                <label for="newsText">
                    Введите новость
                </label>
            </div>

            <div class="mb-3">
                <label for="newsImage" class="form-label">Загрузка фотографии</label>
                <input class="form-control" type="file" id="newsImage" name="image">
            </div>

            <div class="mt-5 mb-4">
                <button class="btn-outline-secondary btn bg-gradient btn-lg w-100" type="submit">
                    Добавить
                </button>
            </div>
        </div>
    </form>
</main>
@endsection
