<x-layout>
    <h2>Добро пожаловать {{$user->name}}</h2>

    @if($user->is_admin)
    <div>
        <a href="{{ route('admin.home') }}">В админку</a>
    </div>
    @endif
</x-layout>
