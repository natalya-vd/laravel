<nav {{ $attributes }}>
    <ul>
        <li>
            <a href="{{ route('home') }}">Главная</a>
        </li>
        <li>
            <a href="{{ route('info') }}">Инфо</a>
        </li>
        <li>
            <a href="{{ route('news.category') }}">Новости по категориям</a>
        </li>
        <li>
            <a href="{{ route('admin.home') }}">Админка</a>
        </li>
    </ul>
</nav>
