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
    <img src="{{ Storage::disk('public')->url($news->image) }}" width="300" height="300" />
    @endif
    <p>
        {{$news->text}}
    </p>
    @if($news->link)
    <a href="{{ $news->link }}" target="_blank">Читать в источнике</a>
    @endif
    @endif
    @endif

</x-layout>
