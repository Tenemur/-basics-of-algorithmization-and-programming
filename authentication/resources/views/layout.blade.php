<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Конференции</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}">Главная</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Вход</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Регистрация</a>
                            </li>
                        @endguest

                        @auth
                            <li class="nav-item">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Выход</button>
                                </form>
                            </li>
                        @endauth

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mx-auto">
        @yield('content')
    </main>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
