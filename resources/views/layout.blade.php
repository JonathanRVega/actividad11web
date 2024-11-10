<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        .menu {
            list-style: none;
            display: flex;
            gap: 10px;
        }

        .menu li {
            display: inline;
        }

        .menu .active {
            font-weight: bold;
            color: blue;
        }

        nav {
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 1000;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
        }

        footer {
            position: relative;
            bottom: 0;
            width: 100%;
            text-align: center;
            background-color: #f1f1f1;
            padding: 10px;
            margin-top: auto;
        }

        body {
            display: flex;
            flex-direction: column;
            height: 100vh;
            margin: 0;
        }

        main {
            flex: 1;
        }
    </style>
</head>
<body>
    <nav>
        <ul class="menu">
            <li><a href="{{ route('casa') }}" class="{{ request()->routeIs('casa') ? 'active' : '' }}">Casa</a></li>
            <li><a href="{{ route('fotos') }}" class="{{ request()->routeIs('fotos') ? 'active' : '' }}">Fotos</a></li>
            <li><a href="{{ route('contactos') }}" class="{{ request()->routeIs('contactos') ? 'active' : '' }}">Contactos</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    @include('footer')
</body>
</html>