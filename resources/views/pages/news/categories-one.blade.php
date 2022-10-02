<x-layout>
    @empty($news)
    <p>
        По данному запросу ничего не найдено. Попробуйте другой ID
    </p>
    @endempty

    @isset($news)
    <ul>
        @foreach ($news as $item)
        <li>
            <h2>
                <a href="{{ route('news.one', [$item['category_id'], $item['id']]) }}">
                    {{$item['title']}}
                </a>
            </h2>
            <p>
                {{$item['description']}}
            </p>
        </li>
        @endforeach
    </ul>

    @endisset

</x-layout>
