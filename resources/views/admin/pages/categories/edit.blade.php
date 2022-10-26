@extends('admin.layouts.main')

@section('title')
@parent Добавить категорию
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

    <form class="add-news card border-0 mx-auto" action="{{ route('admin.category.update',['category' => $category]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="bg-secondary p-3 bg-gradient text-white">Редактировать категорию</p>
        <div class="card-body">
            <div class="form-floating">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Категория" name="title" id="titleCategory" value="{{ $category->title }}">
                <label for="titleCategory">
                    Категория
                </label>
            </div>

            <div class="mt-5 mb-4">
                <button class="btn-outline-secondary btn bg-gradient btn-lg w-100" type="submit">
                    Сохранить
                </button>
            </div>
        </div>
    </form>
</main>
@endsection
