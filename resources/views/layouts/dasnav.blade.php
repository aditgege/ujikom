<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href=" {{ asset('css/dastyle.css') }}">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-collapse navbar-static-top navigasi" style="position: fixed; width: 100% ">
            <div class="container">
                <div class="navbar-header">

                

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                         @if (Auth::user())
                            <li ><a href="{{ url('/') }}" >Daftar Sekolah</a></li>
                        @else
                            <li></li>
                        @endif    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right" style="color: white !important">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li ><a href="{{ url('/login') }}" >Login</a></li>
                            <li ><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

     

            <div class="navside col-2 fixed-top my-5 " style="z-index: 1 ; margin-top: 60px;" >
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Sekolah</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Provinsi</a>
                    </li>
          
            </div>
            <main class="">
                @yield('content')
            </main>
        </div>
         <script src="/js/app.js"></script>
</body>
    </body>
</html>
<!-- Scripts -->
   
