<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>BoxLogix</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/ruang-admin.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    @include('Dashboards.partials.sidebar')
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        @include('Dashboards.partials.header')
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="master">Accueil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>

          <div class="row mb-3">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Revenus (mensuels)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$0</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 0%</span>
                        <span>Depuis le mois dernier</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Nombres de client</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">0</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 0%</span>
                        <span>Depuis l'année dernière</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-shopping-cart fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Nombre de colis Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Nombre de colis</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">$0</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 0%</span>
                        <span>Depuis le mois dernier</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-box fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card h-100">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Nombre de coursier</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">$0</div>
                        <div class="mt-2 mb-0 text-muted text-xs">
                          <span class="text-success mr-2"><i class="fas fa-arrow-up"></i>0%</span>
                          <span>Depuis le mois dernier</span>
                        </div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-box fa-2x text-info"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- Autres cartes et graphiques ici ... -->

          </div>
          <!-- Row -->

          <!-- Modèle de tableau pour les colis -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Liste des colis</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ID Colis</th>
                        <th>Destinataire</th>
                        <th>Poids</th>
                        <th>Statut</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- Remplacez les lignes suivantes par une boucle pour afficher tous les colis -->
                      <tr>
                        <td><a href="#">C001</a></td>
                        <td>John Doe</td>
                        <td>2.5 kg</td>
                        <td><span class="badge badge-success">Livré</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Détails</a></td>
                      </tr>
                      <tr>
                        <td><a href="#">C002</a></td>
                        <td>Jane Doe</td>
                        <td>1.8 kg</td>
                        <td><span class="badge badge-warning">En cours de livraison</span></td>
                        <td><a href="#" class="btn btn-sm btn-primary">Détails</a></td>
                      </tr>
                      <!-- ... -->
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>


          <br>

          <script>
            // Récupérez le contexte du canvas
            var ctx = document.getElementById('clientsLineChart').getContext('2d');

            // Initialisez le graphique en utilisant les données du graphique linéaire
            var clientsLineChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
                    datasets: [{
                        label: 'Nombre de Clients',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        data: [15, 20, 30, 25, 35, 40, 45, 50, 55, 60, 70, 65],
                    }]
                },
                options: {
                    scales: {
                        x: [{
                            grid: {
                                display: false
                            }
                        }],
                        y: [{
                            grid: {
                                display: false
                            }
                        }]
                    },
                    responsive: true,
                    maintainAspectRatio: false
                }
            });
        </script>
          <div class="col-xl-6 col-lg-7">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Évolution du Nombre de Clients par Mois</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="clientsLineChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
          <!-- Row -->

          <!-- Vos autres sections et modèles ici ... -->

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      @include('Dashboards.partials.footer')
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
</div>
</body>

<script>
    // Récupérez le contexte du canvas
    var ctx = document.getElementById('clientsLineChart').getContext('2d');

    // Initialisez le graphique en utilisant les données du graphique linéaire
    var clientsLineChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
            datasets: [{
                label: 'Nombre de Clients',
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                data: [15, 20, 30, 25, 35, 40, 45, 50, 55, 60, 70, 65],
            }]
        },
        options: {
            scales: {
                x: [{
                    grid: {
                        display: false
                    }
                }],
                y: [{
                    grid: {
                        display: false
                    }
                }]
            },
            responsive: true,
            maintainAspectRatio: false
        }
    });
</script>

</html>
