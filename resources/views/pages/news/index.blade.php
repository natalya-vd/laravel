<x-layout>
    <h1 class="mb-4">Список новостей</h1>

    <ul class="list-group list-group-flush mb-4">
        @foreach ($news as $item)
        <li class="list-group-item">
            <a class="stretched-link" href="{{ route('news.category.one', [$item->slug, $item->id]) }}">
                {{$item->title}}
            </a>
        </li>
        @endforeach
    </ul>
    {{$news->links()}}
</x-layout>
