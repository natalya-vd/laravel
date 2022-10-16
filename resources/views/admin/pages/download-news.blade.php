@extends('admin.layouts.main')

@section('title')
@parent Скачать новость
@endsection

@section('header')
@include('admin.components.header')
@endsection

@section('content')
<main class="container py-5">
    <form class="add-news card border-0 mx-auto" action="{{ route('admin.downloadNews') }}" method="post">
        @csrf
        <p class="bg-secondary p-3 bg-gradient text-white">Выберите формат файла</p>
        <div class="card-body">
            <div class="form-floating mb-3">
                <select class="form-select" name="format" id="format" aria-label="Выбор формата">
                    <option value="json">JSON</option>
                    <option value="excel">Excel</option>
                </select>
                <label for="format">
                    Формат файла
                </label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" name="category_id" id="categoryNews" aria-label="Выбор категории">
                    @forelse($categories as $item)
                    <option value="{{ $item->id }}">
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

            <div class="mt-5 mb-4">
                <button class="btn-outline-secondary btn bg-gradient btn-lg w-100" type="submit">
                    Скачать
                </button>
            </div>
        </div>
    </form>
</main>
@endsection
