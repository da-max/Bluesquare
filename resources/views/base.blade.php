<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/js/app.ts')
</head>
<body>
<nav class="navbar navbar-expand-lg mb-5 bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Bluesquare Ticket manager</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ @route('tickets.index')  }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ @route('tickets.create') }}">Ajouter un ticket</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<main class="container">
    @if($errors->get('message'))
        <div class="alert alert-info" role="alert">
            {{ $errors->get('message')[0] }}
        </div>
    @endif
    @yield('content')
</main>
</body>
</html>
