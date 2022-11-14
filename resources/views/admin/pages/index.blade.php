@extends('admin.layouts.main')

@section('title')
@parent Главная
@endsection

@section('header')
@include('admin.components.header')
@endsection

@section('menu')
@include('admin.components.menu')
@endsection

@section('content')
<main>
    <a href="{{ route('admin.parser') }}">Парсить новости</a>
    <div class="card w-50 mx-auto my-5">
        <p class="card-body">
            Здесь будет админка
        </p>
    </div>

</main>
@endsection
