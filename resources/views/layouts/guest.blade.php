<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('meta_description', 'Plataforma para descubrir, compartir e inspirarte en comunidades. Explora una variedad de temas, conecta con otros usuarios y encuentra inspiración en NextTopic.')">
    <meta property="og:description" content="@yield('meta_op_desc', 'Plataforma para descubrir, compartir e inspirarte en comunidades. Explora una variedad de temas, conecta con otros usuarios y encuentra inspiración en NextTopic.')">
    <meta property="og:title" content="@yield('meta_op_title', config('app.name'))">
    <meta property="og:image" content="@yield('meta_op_img', asset('img/nexttopic/logosimple.png'))">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Hernán Torres">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com">
    <link href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hedvig+Letters+Serif:opsz@12..24&family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('img/nexttopic/favicon.png')}}" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @yield('styles')
    <!-- Styles -->
</head>
<body>
    {{-- <form action="{{route('logout')}}" method="post">
        @csrf
        <input type="submit" value="salir">
    </form> --}}
    <header><h1>NextTopic</h1></header>
    <main class="container__main">
        @yield('content')
    </main>
    <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('scripts')
    <!-- Scripts -->
</body>
</html>
