<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="{{ asset('img/logo/logo.png') }}">
  <title>BoxLogix</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css')}}">
 {{-- <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->

<style>

    #div2 {
      margin-top: 20px; /* Vous pouvez ajuster la valeur selon vos besoins */
    }
  </style>
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <img src="{{asset('img/logo/logo2.png')}}">
      </div>
      <div class="sidebar-brand-text mx-3">Tableau de Bord</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('master') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>TB</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Sections
    </div>
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
        aria-expanded="true" aria-controls="collapseBootstrap">
        <i class="far fa-fw fa-window-maximize"></i>
        <span>Pages</span>

      </a>
      <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Pages</h6>
          <a class="collapse-item" href="client.index">
            <i class="fas fa-fw fa-users" style="color: #007bff;"></i>
            Clients
          </a>


          <a class="collapse-item" href="coursier.index">
            <i class="fas fa-fw fa-truck" style="color: #007bff;"></i>
            Coursiers
          </a>
          <a class="collapse-item" href="colis.index">
            <i class="fas fa-fw fa-box" style="color: #007bff;"></i>
            Colis
          </a>

         <a class="collapse-item" href="{{route('commune.index')}}">
            <i i class="fas fa-fw fa-building" style="color: #007bff;"></i>
            Commune
          </a>

          <a class="collapse-item" href="{{route('contrat.index')}}">
            <i class="fas fa-file-contract" style="color: #007bff;"></i>
            Contrat
          </a>


         <a class="collapse-item" href="{{route('sinistre.index')}}">
            <i class="fas fa-exclamation-triangle" style="color: #007bff;"></i></i>
            Sinistre
          </a>

         <a class="collapse-item" href="{{route('zone.index')}}">
            <i class="fas fa-fw fa-map-marker" style="color: #007bff;"></i>
            Zone
          </a>

          {{-- <a class="collapse-item" href="#">
            <i class="fas fa-fw fa-file" style="color: #007bff;"></i>
            Bordereau
        </a> --}}



        </div>
      </div>
    </li>
    <li class="nav-item" >

      <div id="collapseForm" class="collapse" aria-labelledby="headingForm" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <h6 class="collapse-header">Forms</h6>
          <a class="collapse-item" href="form_basics.html">Form Basics</a>
          <a class="collapse-item" href="form_advanceds.html">Form Advanceds</a>
        </div>
      </div>
    </li>

    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{route('user.index')}}">
          <i class="fas fa-fw fa-user"></i>
          <span>Utilisateurs</span>
        </a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{route('Dossier.index')}}">
          <i class="fas fa-folder" ></i>
          <span>Dossiers</span>
        </a>
      </li>


</ul>

    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div >
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
            <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown">
                  <form class="navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                        aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>
              <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img class="img-profile rounded-circle" src="{{ asset('img/boy.png') }}" style="max-width: 70px">

                       {{ Auth::user()->name }}
              </a>

              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">


                  <a class="dropdown-item" href="#">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      Profile - {{ Auth::user()->name }}
                  </a>

                  <div class="dropdown-divider"></div>

                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="dropdown-item">
                          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                          Logout
                      </button>
                  </form>
              </div>
            </div>
            </ul>
        </nav>

        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
            @yield('contenu')
        </div>
            {{-- <main>

            </main> --}}



        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">

      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <script src="{{asset('https://code.jquery.com/jquery-3.6.4.min.js')}}"></script>
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
</div>
</body>
