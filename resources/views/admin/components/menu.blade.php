<nav class="p-4">
    <ul class="list-group mb-0">
        <li>
            <a @class([ 'border' , 'border-0' , 'list-group-item' , 'list-group-item-action' , 'active'=> Route::currentRouteName() == 'admin.home'
                ]) href="{{ route('admin.home') }}">
                Главная
            </a>
        </li>
        <li>
            <a @class([ 'border' , 'border-0' , 'list-group-item' , 'list-group-item-action' , 'active'=> Route::currentRouteName() == 'admin.category.list'
                ]) href="{{ route('admin.category.list') }}">
                Категории
            </a>
        </li>
        <li>
            <a @class([ 'border' , 'border-0' , 'list-group-item' , 'list-group-item-action' , 'active'=> Route::currentRouteName() == 'admin.news.list'
                ]) href="{{ route('admin.news.list') }}">
                Новости
            </a>
        </li>
        <li>
            <a @class([ 'border' , 'border-0' , 'list-group-item' , 'list-group-item-action' , 'active'=> Route::currentRouteName() == 'admin.users.index'
                ]) href="{{ route('admin.users.index') }}">
                Пользователи
            </a>
        </li>
        <li>
            <a @class([ 'border' , 'border-0' , 'list-group-item' , 'list-group-item-action' , 'active'=> Route::currentRouteName() == 'admin.resources.index'
                ]) href="{{ route('admin.resources.index') }}">
                Ресурсы
            </a>
        </li>
        <li>
            <a @class([ 'border' , 'border-0' , 'list-group-item' , 'list-group-item-action' , 'active'=> Route::currentRouteName() == 'home'
                ]) href="{{ route('home') }}">
                Главная новости
            </a>
        </li>
    </ul>
</nav>
