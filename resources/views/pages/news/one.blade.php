<x-layout>
    @empty($news)
    <x-card-error>
        По данному запросу ничего не найдено. Попробуйте другой ID
    </x-card-error>
    @endempty

    @if($news)
    @if(!$news['isPrivate'])
    <h1 class="mb-4">
        {{$news['title']}}
    </h1>
    <p>
        {{$news['text']}}
    </p>
    @else
    <x-card-warning>
        Зарегистрируйтесь для просмотра
    </x-card-warning>
    @endif
    @endif

</x-layout>
