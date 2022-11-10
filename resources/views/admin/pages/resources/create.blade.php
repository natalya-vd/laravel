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

    <form class="add-news card border-0 mx-auto" action="{{ route('admin.resources.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <p class="bg-secondary p-3 bg-gradient text-white">Добавить ресурс</p>
        <div class="card-body">
            <div class="form-floating">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Название ресурса" name="title" id="titleResource" value="{{ old('title') }}">
                <label for="titleResource">
                    Ресурс
                </label>
            </div>
            <div class="form-floating">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Ссылка на ресурс" name="link" id="linkResource" value="{{ old('link') }}">
                <label for="linkResource">
                    Ссылка на ресурс
                </label>
            </div>
            <div class="form-floating">
                <textarea class="form-control form-control-lg mb-3" type="text" placeholder="Описание ресурса" name="title" id="descriptionResource" value="{{ old('description') }}"></textarea>
                <label for="descriptionResource">
                    Описание ресурса
                </label>
            </div>

            <div class="mt-5 mb-4">
                <button class="btn-outline-secondary btn bg-gradient btn-lg w-100" type="submit" dusk="create-category">
                    Добавить
                </button>
            </div>
        </div>
    </form>
</main>
@endsection
