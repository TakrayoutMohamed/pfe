<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="../assets/img/fpoLogo2.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
      @yield('title')
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSS Files -->

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
    <link href="../assets/css/MyMasterCss.css" rel="stylesheet" />

    
  </head>
  <body class="user-profile m-0 p-0">
    {{-- Statue --}}
    <div class=" p-0 m-0"  style="">
      @if (session('status'))
        <div class="alert bg-primary ptxt p-0 m-0 text-center " role="alert" style="color:red; font-size:20px;">
          {{ session('status') }}
        </div>
      @endif
    </div>
    <div class="wrapper">
      <div class="panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute row m-0">
          <div class="container-fluid col-12">
            <div class="navbar-wrapper">
              <a class="navbar-brand" >Admin's Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-target="#navigation-index" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
              <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation-index">
              <form class="navbar-form no-border">
                <div class=" input-group ">
                    <input type="text" value="" style="color:black" class="form-control bgblack" placeholder="Search Cours...">
                    <div class="input-group-append ">
                        <div class="input-group-text center">
                            <img src="../assets/img/search.png" width="15" height="12" alt="">
                        </div>
                    </div>
                </div>
              </form>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/dashboard">
                    <i class="now-ui-icons media-2_sound-wave"></i>
                    <p class="d-lg-none d-md-block">
                      Stats
                    </p>
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link"  id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons location_world" style="height:20px; width:20px;"></i>
                    <span class="notification" >5</span>
                    <p>
                      <span class="d-lg-none d-md-block">Some Actions</span>
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                    <a class="dropdown-item" href="#">Another Notification</a>
                    <a class="dropdown-item" href="#">Another One</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="now-ui-icons users_single-02"></i>
                    <p class="d-lg-none d-md-block">
                      Account
                    </p>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby='navbarDropdownProfile'>
                    <a class="dropdown-item" href="/home/{{Auth::user()->id}}">Home</a>
                    <a class="dropdown-item" href="/">Main page</a>
                    <a class="dropdown-item" href="/Admin-data-edit/{{Auth::user()->id}}">Edit information</a>
                    <div class="dropdown-divider">
                    </div>
                      <a class="dropdown-item btn btn-danger" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                      </a>
  
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>

                    <a class="dropdown-item" href="">HELP</a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel  p-0 m-0 bgpanel" style="background-color:rgb(0, 0, 0);">
        </div>
        
        {{-- main  bar --}}
        <div class="row m-0 p-0">
          <ul class="nav col-12  m-0 p-0">
            <li class="col-lg-2 col-md-2 col-sm-4 col-6 pt-2 text-center  {{'Professors-admin'==request()->path() ? 'active' : '' }}">
              <a href="/Professors-admin">
                <i ><img src="../assets/img/teachers_icon1.jpeg" alt="..." class="circle-icon-img"></i>
                <p>Professors</p>
              </a>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-6 pt-2 text-center {{'Students-admin'==request()->path() ? 'active' : '' }}">
              <a href="/Students-admin">
                <i ><img src="../assets/img/students_icon.jpeg" alt="..." class="circle-icon-img"></i>
                <p>Students</p>
              </a>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-6 pt-2 text-center {{'Statements-admin'==request()->path() ? 'active' : '' }}">
              <a href="/Statements-admin">
                <i ><img src="../assets/img/statements_icon.jpeg" alt="..." class="circle-icon-img"></i>
                <p>Statements</p>
              </a>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-6 pt-2 text-center {{'Comments-admin'==request()->path() ? 'active' : '' }}">
              <a href="/Comments-admin">
                <i ><img src="../assets/img/comments_icon.jpeg" alt="..." class="circle-icon-img"></i>
                <p>Comments</p>
              </a>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-6 pt-2 text-center {{'AddStatement/'.Auth::user()->id==request()->path() ? 'active' : '' }}">
              <a href="/AddStatement/{{Auth::user()->id}}">
                <i ><img src="../assets/img/add_statement_icon1.jpeg" alt="..." class="circle-icon-img"></i>
                <p>Add Statement</p>
              </a>
            </li>
            <li class="col-lg-2 col-md-2 col-sm-4 col-6 pt-2 text-center {{'AddProfessor/'.Auth::user()->id==request()->path() ? 'active' : '' }}">
              <a href="/AddProfessor/{{Auth::user()->id}}">
                <i ><img src="../assets/img/add_teachers_icon.jpeg" alt="..." class="circle-icon-img"></i>
                <p>Add Professors</p>
              </a>
            </li>
          </ul>
        </div>
        <div class="p-0 mt-0">
          @yield('content')
        </div>
        {{-- move to top --}}
        <div class="bg-dark">
            <a href="#top" class="now-ui-icons arrows-1_minimal-up  p-2 circle bg-dark color-white" style="position:fixed; bottom:10px; right:3px;">top</a>
            {{-- <a href="#bottom" class="now-ui-icons arrows-1_minimal-down p-2 circle position-fixed" style="top:80px; right:3px;">down</a> --}}
        </div>
        <footer class="footer m-0 p-0" id="bottom">
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
    <!--   Core JS Files   -->
    <div>
      <script src="../assets/js/core/jquery.min.js"></script>
      <script src="../assets/js/core/popper.min.js"></script>
      <script src="../assets/js/core/bootstrap.min.js"></script>
      <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
      <script src="../assets/js/plugins/chartjs.min.js"></script>
      <!--  Notifications Plugin    -->
      <script src="../assets/js/plugins/bootstrap-notify.js"></script>
      <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
      <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script>
      <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
      <script src="../assets/demo/demo.js"></script>
    </div>

    @yield('scripts')
    
  </body>

</html>  