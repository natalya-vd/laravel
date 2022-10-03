@extends('admin.layouts.main')

@section('title')
@parent Добавить новость
@endsection

@section('header')
@include('admin.components.header')
@endsection

@section('content')
<main class="container py-5">
    <form class="add-news card border-0 mx-auto" action="#">
        <p class="bg-secondary p-3 bg-gradient text-white">Добавить новость</p>
        <div class="card-body">
            <div class="form-floating">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Заголовок новости" name="title_news" id="titleNews">
                <label for="titleNews">
                    Заголовок новости
                </label>
            </div>

            <div class="form-floating">
                <textarea class="add-news__textarea form-control form-control-lg mb-3" name="description_news" placeholder="Введите краткое описание новости" id="description"></textarea>
                <label for="description">
                    Введите краткое описание новости
                </label>
            </div>

            <div class="form-floating">
                <textarea class="add-news__textarea form-control form-control-lg mb-3" name="text_news" placeholder="Введите новость" id="newsText"></textarea>
                <label for="newsText">
                    Введите новость
                </label>
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
