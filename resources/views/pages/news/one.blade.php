<x-layout>
    @empty($news)
    <x-card-error>
        По данному запросу ничего не найдено. Попробуйте другой ID
    </x-card-error>
    @endempty

    @if($news)
    @if(Auth::user() === null && $news->is_private)
    <x-card-warning>
        <a href="{{ route('login') }}">Авторизуйтесь</a> или <a href="{{ route('register') }}">зарегистрируйтесь</a> для просмотра

    </x-card-warning>
    @else
    <h1 class="mb-4">
        {{$news->title}}
    </h1>
    @if($news->image)
    <img src="/{{$news->image}}" />
    @endif
    <p>
        {{$news->text}}
    </p>
    @endif
    @endif

</x-layout>
