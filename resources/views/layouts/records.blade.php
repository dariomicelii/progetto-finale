<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(["resources/sass/app.scss","resources/js/app.js"])
</head>
<body>
     <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div class="logo_myrecords">
                        <svg width="320" height="90" viewBox="0 0 320 90" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="MyRecords logo">
                            <style>
                                .title {
                                font-family: 'Georgia', serif;
                                font-size: 38px;
                                fill: #3e2c1c;
                                }
                                .subtitle {
                                font-family: 'Courier New', monospace;
                                font-size: 13px;
                                fill: #b28d5b;
                                }
                                .vinyl {
                                fill: #222;
                                }
                                .label {
                                fill: #e2b05b;
                                }
                            </style>
                            <circle class="vinyl" cx="45" cy="45" r="30"/>
                            <circle class="label" cx="45" cy="45" r="5"/>
                            <text class="title" x="90" y="50">MyRecords</text>
                            <text class="subtitle" x="90" y="70">Vintage Vinyl Collection</text>
                            </svg>

                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item d-flex">
                            <a class="nav-link" href="{{url('/') }}">{{ __('Home') }}</a>
                            <a class="nav-link" href="{{url('/records') }}">{{ __('Records') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('dashboard') }}">{{__('Dashboard')}}</a>
                                <a class="dropdown-item" href="{{ url('profile') }}">{{__('Profile')}}</a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container">
        <div class="d-flex justify-content-center  flex-column py-4">
            @section('cover_image')
                <img src="@yield('cover_image')" alt="Cover Image" class="img-fluid w-50">
                
                <h1>
                    @yield('title')
                </h1>
                @yield('content')
            </div>
    </div>
</body>
</html>