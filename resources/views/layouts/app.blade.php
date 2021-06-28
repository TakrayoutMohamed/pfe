<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            {{-- {{ config('app.name', 'Laravel') }} --}}
            @yield('title')
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
        <link href="../assets/css/myStyle.css" rel="stylesheet" /> 
    </head>
    <body id="top">
        <div id="app">
            <nav class="navbar navbar-expand-md bgdarkred m-0 navbar-light bg-white shadow-sm mb-0">
                <div class="container  ">
                    <a class="navbar-brand shadow" href="{{ url('/') }}">
                        {{ config('', 'Welcome') }}
                    </a>
                    <button class="navbar-toggler navbar-toggler-icon" type="button" data-target="#navbarSupportedContent" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav  row m-0">
                            <!-- Authentication Links -->
                            @guest
                                <a class=" m-0 p-0 ">
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link">
                                            <i class="d-lg-none d-md-block now-ui-icons media-1_button-play"></i>
                                            <i class="" style="color:black; font-size:15px;">Login</i>
                                        </a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="nav-link">
                                                <i class="d-lg-none d-md-block now-ui-icons media-1_button-power"></i>
                                                <i class="" style="color:black; font-size:15px;">Register</i>
                                            </a>
                                        </li>
                                    @endif
                                </a>
                            @else
                                <li class="nav-item dropdown">
                                    <a  id="navbarDropdown" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                                        <i class="material-icons" style="color:black;">{{ Auth::user()->FirstName }}</i>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="m-0" >
                <div class='row m-0' >
                    <div class='card p-0 m-0 bgyellow'>
                        <div class="card-body bgblack p-1 pl-2 pr-2 m-0 " style="min-height:420px;">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- move to top --}}
            <div>
                <a href="#top" class="now-ui-icons arrows-1_minimal-up  p-2 circle" style="position:fixed; bottom:10px; right:3px;">top</a>
                {{-- <a href="#bottom" class="now-ui-icons arrows-1_minimal-down p-2 circle position-fixed" style="top:80px; right:3px;">down</a> --}}
            </div>
            {{-- Statue --}}
            <div class=" p-0 m-0 col-12"  style="position:fixed; top:10px; ">
                @if (session('status'))
                    <div class="alert bg-dark p-0 m-0 text-center " role="alert" style="color:red; font-size:20px;">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <footer class="footer" id="bottom">
                <div class=" container-fluid ">
                    <nav>
                        <ul>
                            <li>
                                <a href="#">
                                    alvares teams
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Blog
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright" id="copyright">
                        &copy;
                        <script>
                            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                        </script>
                        , Designed by 
                        <a href="#alvares_negredo" target="_blank">Alvares</a>
                        . Coded by 
                        <a href="#techno team" target="_blank">TECHNO TEAM</a>.
                    </div>
                </div>
            </footer>
        </div>
        <!--   Core JS Files   -->
            <script src="../assets/js/core/jquery.min.js"></script>
            <script src="../assets/js/core/popper.min.js"></script>
            <script src="../assets/js/core/bootstrap.min.js"></script>
            <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
            <!--  Google Maps Plugin    -->
            {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}
            <!-- Chart JS -->
            <script src="../assets/js/plugins/chartjs.min.js"></script>
            <!--  Notifications Plugin    -->
            <script src="../assets/js/plugins/bootstrap-notify.js"></script>
            <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
            <script src="../assets/demo/demo.js"></script>
            @yield('scripts')
    </body>
</html>
