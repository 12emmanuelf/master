
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
