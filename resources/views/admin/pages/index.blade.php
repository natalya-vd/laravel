@extends('admin.layouts.main')

@section('title')
@parent Главная
@endsection

@section('header')
@include('admin.components.header')
@endsection

@section('content')
<main class="container">
    <div class="card w-50 mx-auto my-5">
        <p class="card-body">
            Здесь будет админка
        </p>
    </div>

</main>
@endsection
