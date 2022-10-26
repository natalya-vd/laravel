@extends('admin.layouts.main')

@section('title')
@parent Новости
@endsection

@section('header')
@include('admin.components.header')
@endsection

@section('menu')
@include('admin.components.menu')
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        @include('admin.components.message')

        <div class="d-flex justify-content-end mb-3">
            <a class="btn btn-outline-primary" href="{{route('admin.news.create')}}">
                Добавить новость
            </a>
        </div>
        <table>
            <tr>
                <th class="table__title table__title_size-1">
                    ID
                </th>
                <th class="table__title table__title_size-2">
                    Заголовок новости
                </th>
                <th class="table__title table__title_size-3">
                    Краткое описание
                </th>
                <th class="table__title table__title_size-auto">
                    Категория
                </th>
                <th class="table__title table__title_size-4">
                    Приватная новость
                </th>
                <th class="table__title table__title_size-auto">
                    Создана
                </th>
                <th class="table__title table__title_size-5">
                    Управление
                </th>
            </tr>
            @foreach ($news as $item)
            <tr>
                <td class="table__cell">{{$item->id}}</td>
                <td class="table__cell">{{$item->title}}</td>
                <td class="table__cell">{{$item->description}}</td>
                <td class="table__cell">{{$item->category->title}}</td>
                <td class="table__cell">
                    <input type="checkbox" {{$item->is_private == 1 ? 'checked' : ''}} disabled>
                </td>
                <td class="table__cell">{{!is_null($item->created_at) ? $item->created_at->format('d-m-Y H:i') : ''}}</td>
                <td class="table__cell">
                    <a href="{{route('admin.news.update', $item)}}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg>
                    </a>
                    <a href="{{route('admin.news.delete', $item)}}" class="btn btn-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                    </a>
                </td>
            </tr>
            @endforeach
        </table>
        {{$news->links()}}
    </div>
</div>
@endsection
