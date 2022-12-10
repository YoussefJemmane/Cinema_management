<!DOCTYPE html>
<html lang="en" class=" bg-red-700">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="m-5">
        <div class="navbar bg-base-100 rounded-xl" data-theme="light">
            <div class="navbar-start">
                <div class="dropdown">
                    <label tabindex="0" class="btn btn-ghost btn-circle">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h7" />
                        </svg>
                    </label>
                    <ul tabindex="0"
                        class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a href="{{ route('movie.index') }}">Movies</a></li>
                        <li><a href="{{ route('room.index') }}">Rooms</a></li>

                    </ul>
                </div>
            </div>
            <div class="navbar-end">
                <a class="btn btn-ghost normal-case text-xl" href="/">Cinema Management</a>
            </div>

        </div>
    </div>
    <div>
        @yield('content')
    </div>
</body>

</html>
