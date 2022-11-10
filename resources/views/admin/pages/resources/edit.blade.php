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

    <form class="add-news card border-0 mx-auto" action="{{ route('admin.resources.update',['resource' => $resource]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p class="bg-secondary p-3 bg-gradient text-white">Обновить ресурс</p>
        <div class="card-body">
            <div class="form-floating">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Название ресурса" name="title" id="titleResource" value="{{ $resource->title }}">
                <label for="titleResource">
                    Ресурс
                </label>
            </div>
            <div class="form-floating">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Ссылка на ресурс" name="link" id="linkResource" value="{{ $resource->link }}">
                <label for="linkResource">
                    Ссылка на ресурс
                </label>
            </div>
            <div class="form-floating">
                <textarea class="form-control form-control-lg mb-3" type="text" placeholder="Описание ресурса" name="description" id="descriptionResource">{{ $resource->description }}</textarea>
                <label for="descriptionResource">
                    Описание ресурса
                </label>
            </div>

            <div class="mt-5 mb-4">
                <button class="btn-outline-secondary btn bg-gradient btn-lg w-100" type="submit" dusk="update-category">
                    Сохранить
                </button>
            </div>
        </div>
    </form>
</main>
@endsection
