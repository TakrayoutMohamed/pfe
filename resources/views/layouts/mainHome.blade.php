<?php
use App\Detail;
use App\File;
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        {{-- <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png"> --}}
        <link rel="icon" type="image/png" href="../assets/img/fpoLogo2.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            @yield('title')
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!-- CSS Files -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
        <style>
            .active
            {
                background-color: blanchedalmond;
                color: black;
            }
            .size-width-height
            {
                width: 100%;
                height: auto;

            }
            .bgblack
            {
                background-color: black;
            }
            .bgdark
            {
                background-color:darkslategray;
            }
            .bgwhite
            {
                background-color: white;
            }
            .bgyellow
            {
                background-color: yellow;
            }
            .bgdimgray
            {
                background-color:dimgray;
            }
            .bggray
            {
                background-color:gray;
            }
            .bgmaroon
            {
                background-color:maroon;
            }
            .bgdarkred
            {
                background-color:darkred;
            }
            .bgblue
            {
                background-color: blue;
            }
            .bgciel
            {
                background-color: #00ccff;
            }
            #bgback
            {
                /* width:100%;
                height:100%; */
                background:url('../assets/img/bg5.jpg') ;
                background-size: 100% 180px;
                background-position: center center;
            }
            #bgmale
            {
                width:140px;
                height:140px;
                background:url('../assets/img/default-avatar-male.png') ;
                background-size: 140px 140px;
                background-position: center center;
            }
            #bgfemale
            {
                width:140px;
                height:140px;
                background:url('../assets/img/default-avatar-female.jpeg') ;
                background-size: 140px 140px;
                background-position: center center;
            }
            .bgfpo
            {
                background:url('../assets/img/fpo_logo.jpeg') no-repeat ;
                background-size: 50% 100%;
                background-position: center center;
            }
            .bgpanel
            {
                height: 80px;
                background:url('../assets/img/fpoLogo1.png') NO-repeat ;
                background-position: left;
                opacity: 0.4;
            }
            .color-white
            {
                color:white;
            }
            .color-black
            {
                color:black;
            }
            .color-white-shadow
            {
                color:white;
                text-shadow: blue 1px 2px;
            }


            .radiusDD
            {
                border-top-right-radius: 0px;
                border-bottom-right-radius: 0px;
            }
            .radiusDDP
            {
                border-top-left-radius: 0px;
                border-bottom-left-radius: 0px;
            }
            .radius-collapse
            {
                border-radius:100px ;
            }
            .tabs_radius
            {
                margin:1px -11px 1px -11px;
                border-radius:0px 0px 30px 30px;
            }
            .radius-top
            {
                border-radius: 20px 20px 0px 0px;
            }
            .radius-top-
            {
                border-radius: 10px 10px 0px 0px;
            }
            .radius-down
            {
                border-radius:0px 0px 30px 30px ;
            }
            .radius-down-
            {
                border-radius:0px 0px 18px 18px ;
            }

            .scroll
            {
                width: 100%;
                height:auto;
                /* resize: vertical; */
                overflow: auto;
            }
            .position-relative
            {
                position: relative;
            }
            .position-absolute
            {
                position:absolute;
            }
            .position-fixed
            {
                position: fixed;
            }
            .textarea
            {
                resize: vertical;
                height:180px;
                width:100%;
                font-size:16px;
            }
            .myinput input
            {
               background-color:cornsilk;
            }
            .mylabel label
            {
                font-style: oblique;
                font-size: 14px;
                color:black;
            }

        </style>
    </head>
    <body id="top">
        {{-- sidebar --}}
        <div class="sidebar sidebar-normal" data-color="orange" ><!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow -->
            <div class="logo p-1 m-0 ">
                <a class="simple-text logo-mini">
                    FPO
                </a>
                <a href="#" class="simple-text logo-normal">
                    Techno Team
                </a>
            </div>
            <div class="sidebar-wrapper bgmaroon" id="sidebar-wrapper">
                <ul class="nav">
                    {{-- Offeciale Site of FPO --}}
                    <li class="p-0 m-0" >
                        <a href="https://ecours-fpo.uiz.ac.ma">
                            <i class="now-ui-icons design_app"></i>
                            <p>Offeciale Site of FPO</p>
                        </a>
                    </li>
                    {{-- Doctors sites --}}
                    <li class="bgblack p-0 m-0">
                        <a class="p-0 m-0">
                            <i class="now-ui-icons education_hat"></i>
                            <p class="p-0 m-0">Doctors sites</p>
                        </a>
                    </li>
                    @foreach ($users as $users)
                        @foreach ($users->details as $detail)
                            @if(Detail::where('user_id','=',$users->id))
                                @if ($detail->Siteweb !=NULL)
                                    <li class="p-0 m-0">
                                        {{-- {{'dashboard'==request()->path() ? 'active' : '' }} --}}
                                        <a href="{{$detail->Siteweb}}" target="_blank" class="p-0 m-1">
                                            <i class="now-ui-icons objects_globe"></i>
                                            <p class="p-0 m-0">{{$users->FirstName.' '. $users->LastName}}<sub>{{$users->Feliere}}</sub> </p>
                                        </a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- endsidebar --}}

        <div class="wrapper " >
            <div class="main-panel w-80 h-100" id="main-panel">
                <!-- Navbar -->
                <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute" >
                    <div class="container-fluid" >
                        <div class="navbar-wrapper " >
                            <div class="navbar-toggle">
                                <button type="button" class="navbar-toggler">
                                  <span class="navbar-toggler-bar bar1"></span>
                                  <span class="navbar-toggler-bar bar2"></span>
                                  <span class="navbar-toggler-bar bar3"></span>
                                </button>
                            </div>
                            <a class="navbar-brand" style="color:rgba(0, 0, 0, 0.486); font-size:18px; ">
                                <i><b >PUBLIC VIEW FPO</b></i>
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-target="#navigation-index" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                            {{-- <span class="sr-only">Toggle navigation</span> --}}
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                            <span class="navbar-toggler-bar navbar-kebab"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end"  id="navigation-index">
                            {{-- search input --}}
                            <form class="navbar-form no-border">
                                <div class=" input-group ">
                                    <input type="text" value="" style="color:black" class="form-control bgblack" placeholder="Search Cours...">
                                    <div class="input-group-append ">
                                        <div class="input-group-text center">
                                            <img src="../assets/img/search.png" width="20" height="20" alt="">
                                        </div>
                                    </div>
                                </div>
                            </form>
                            {{-- login regester home  --}}
                            <ul class="navbar-nav" >
                                @if (Route::has('login'))
                                    @auth

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
                                        <li class="nav-item">
                                            <a href="{{ url('/home/'.Auth::user()->id) }}" class="nav-link">
                                                <i class="material-icons" style="color:black; font-size:15px;">Home</i>
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item" >
                                            <a href="{{ route('login') }}" class="nav-link">
                                                <i class="d-lg-none d-md-block now-ui-icons media-1_button-play"></i>
                                                <i class="material-icons" style="color:black; font-size:15px;">Login</i>
                                            </a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a href="{{ route('register') }}" class="nav-link">
                                                    <i class="d-lg-none d-md-block now-ui-icons media-1_button-power"></i>
                                                    <i class="material-icons" style="color:black; font-size:15px;">Register</i>
                                                </a>
                                            </li>
                                        @endif
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
                <div class="panel  p-0 m-0 bgpanel" style="background-color:rgb(0, 234, 255);">
                </div>

                <div class=" px-1">
                    @yield('content')
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
        </div>
        {{-- <script>
            function w3_open() {
              document.getElementById("mySidebar").style.display = "block";
            }

            function w3_close() {
              document.getElementById("mySidebar").style.display = "none";
            }
        </script> --}}
        <!--   Core JS Files   -->
        <script src="../assets/js/core/jquery.min.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>
        <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="../assets/js/plugins/chartjs.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="../assets/js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
        <script src="../assets/demo/demo.js"></script>
    </body>
</html>
