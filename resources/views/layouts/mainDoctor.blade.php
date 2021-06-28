<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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

<body class="user-profile" id="top">

  <div class="wrapper " >
    <div>
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar bar"></span>
                <span class="navbar-toggler-bar bar"></span>
                <span class="navbar-toggler-bar bar"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="nav">
                <ul class="row navbar-bar">
                  <div >
                    <a class="navbar-brand radiusDD" href="/home/{{Auth::user()->id}}">Home</a>
                  </div>
                  <div >
                    <a class="navbar-brand radiusDD" href="/doctor-data/{{Auth::user()->id}}">DATA</a>
                  </div>
                  <div >
                    <a class="navbar-brand" href="/doctor-data-edit/{{Auth::user()->id}}">EDIT Information</a>
                  </div>
                  <div >
                    <a class="navbar-brand radiusDDP " href="/doctor-data-profile/{{Auth::user()->id}}">Profile</a>
                  </div>
                </ul>
              </div>
            </div>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo1">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a title="Account" class="nav-link dropdown" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons users_single-02" ></i>
                  <p>
                    <span class="d-lg-none d-md-block" >Account</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby='navbarDropdownMenuLink'>
                  <a class="dropdown-item" href="/home/{{Auth::user()->id}}">Home</a>
                  <a class="dropdown-item" href="/">Main page</a>
                  <a class="dropdown-item" href="/doctor-data-edit/{{Auth::user()->id}}">Edit information</a>
                  <a class="dropdown-item" href="/doctor-data-profile/{{Auth::user()->id}}">Profile</a>
                  <a class="dropdown-item" href="/doctor-data/{{Auth::user()->id}}">Manage data</a>
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
      <div>
        <div class="panel-header panel-header-sm">
        </div>

            @yield('content')

        <div>
          <a href="#top" class="now-ui-icons arrows-1_minimal-up  p-2 circle" style="position:fixed; bottom:10px; right:3px;">top</a>
          {{-- <a href="#bottom" class="now-ui-icons arrows-1_minimal-down p-2 circle position-fixed" style="top:80px; right:3px;">down</a> --}}
        </div>

      </div>
      {{-- Statue --}}
      <div class=" p-0 m-0 col-12" style="position:fixed; top:10px; right:3px;">
        @if (session('status'))
          <div class="alert bgblack p-0 m-0 text-center " role="alert" style="color:red; font-size:20px;">
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

