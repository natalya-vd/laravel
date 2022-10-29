<header class="navbar navbar-expand-lg bg-dark text-white shadow">
    <ul class="container-fluid container justify-content-end mb-0 py-3">
        <li class="nav-item dropdown me-3">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Действия
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="{{ route('admin.downloadImg') }}">
                        Скачать изображение
                    </a>
                </li>
                <li>
                    <a class="dropdown-item" href="{{ route('admin.news.download') }}">
                        Скачать новость
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Управление
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" href="{{ route('admin.news.create') }}">
                        Выйти
                    </a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    Здесь будет инфо о пользователе
                </li>
            </ul>
        </li>
    </ul>
</header>
