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
        <li class="nav-item dropdown me-3">
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
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
</header>
