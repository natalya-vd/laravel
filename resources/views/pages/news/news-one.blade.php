<x-layout>
    @empty($news)
    <p>
        По данному запросу ничего не найдено. Попробуйте другой ID
    </p>
    @endempty

    @isset($news)
    <h1>
        {{$news['title']}}
    </h1>
    <p>
        {{$news['text']}}
    </p>
    @endisset

</x-layout>
