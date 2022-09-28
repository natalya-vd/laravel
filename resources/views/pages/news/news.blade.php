<x-layout>
    <h1>Здесь будут новости</h1>

    <ul>
        @foreach ($news as $item)
        <li>
            <a href="{{ route('news.one', [$item['category_id'], $item['id']]) }}">
                {{$item['title']}}
            </a>
        </li>
        @endforeach
    </ul>
</x-layout>
