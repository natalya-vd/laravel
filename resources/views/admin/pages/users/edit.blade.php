@extends('admin.layouts.main')

@section('title')
@parent Редактировать пользователя
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

    <form class="add-news card border-0 mx-auto" action="{{ route('admin.users.update', ['user' => $user]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <p class="bg-secondary p-3 bg-gradient text-white">Редактировать пользователя</p>
        <div class="card-body">
            <div class="form-floating">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Имя пользователя" name="name" id="nameUser" value="{{ $user->name }}">
                <label for="nameUser">
                    Имя пользователя
                </label>
            </div>

            <div class="form-floating">
                <input class="form-control form-control-lg mb-3" type="text" placeholder="Email" name="email" id="emailUser" value="{{ $user->email }}">
                <label for="emailUser">
                    Email
                </label>
            </div>

            <label class="mb-3">
                <input class="form-check-input" type="checkbox" value="1" name="is_admin" {{$user->is_admin == 1 ? 'checked' : ''}}> Администратор?
            </label>

            <div class="mt-5 mb-4">
                <button class="btn-outline-secondary btn bg-gradient btn-lg w-100" type="submit" dusk="update-user">
                    Сохранить
                </button>
            </div>
        </div>
    </form>
</main>
@endsection
