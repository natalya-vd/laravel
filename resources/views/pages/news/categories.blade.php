<x-layout>
    <h1>Категории новостей</h1>

    <div>
        <a href="{{ route('news.addNewsTemplate') }}">Добавить новость</a>
    </div>

    <ul>
        @foreach ($categories as $item)
        <li>
            <a href="{{ route('news.category-one', $item['id']) }}">
                {{$item['title']}}
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>
