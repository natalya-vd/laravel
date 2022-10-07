<header class="bg-dark text-white shadow">
    <nav class="navbar navbar-expand-lg container py-3">
        <ul class="container-fluid mb-0">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Главная новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.home') }}">Главная админка</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Управление новостями
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.create') }}">
                            Добавить новость
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.downloadImg') }}">
                            Скачать изображение
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.downloadNews') }}">
                            Скачать новость
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</header>
