<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet"> 
    <style>
    body{font-family: 'Lato', sans-serif;}
    </style>
    @livewireStyles
</head>
<body>
    <div id="app">
    <header>
        <div id="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}/">ResumeBuilder</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}/">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}/page/about">About</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}/page/contact">Contact Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}/page/services">Services</a>
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/register">Signup</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/home">My Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}/logout" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                    </li>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                @endguest
                </ul>
                </div>
            </div>
            </nav>
        </div>
    </header>

        <main class="py-4">
            @yield('content')
        </main>


        <footer>
        <div id="footer" class="text-center py-2 muted border-top">
            Copyright 2021 | 
                    <a class="" href="{{ url('/') }}/page/about">About</a> | 
                    
                    <a class="" href="{{ url('/') }}/page/contact">Contact Us</a>
        </div>
    </footer>
    

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    </div>
    @livewireScripts
</body>
</html>
