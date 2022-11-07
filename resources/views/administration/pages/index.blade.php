@extends('administration.layouts.entete2')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-3 col-md-4">
                <div class="card info-card sales-card">
                    <div class="card-body py-3">
                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-cart"></i>
                            </div>
                            @foreach ($Compteur_Articles as $comp)
                                <div class="ps-3">
                                    <h2>{{$comp->Compteur_Articles}} Postes</h2>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <!-- Revenue Card -->
            <div class="col-xxl-3 col-md-4">
              <div class="card info-card revenue-card">
                <div class="card-body py-3">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h2>$3,264</h2>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Customers Card -->
            <div class="col-xxl-3 col-xl-4">
              <div class="card info-card customers-card">
                <div class="card-body py-3">
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    @foreach ($Compteur_Clients as $routage)
                        <div class="ps-3">
                            <h2>{{$routage->Compteur_Clients}} Clients</h2>
                        </div>
                    @endforeach
                  </div>
                </div>
              </div>

            </div>
        </div>
      </div>
    </section>
    <div class="col-12">
        <div class="card recent-sales overflow-auto">
          <div class="card-body">
            <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pseudo</th>
                    <th scope="col">Email</th>
                    <th scope="col">Nom client</th>
                    <th scope="col">Mot de passe</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($clients as $liste):
                      <tr>
                          <th scope="row">{{$liste->id}}</th>
                          <td>{{$liste->pseudo}}</td>
                          <td>{{$liste->email}}</td>
                          <td>{{$liste->nom_client}}</td>
                          <td>{{md5($liste->password)}}</td>
                          <td><span class="badge bg-success">Approved</span></td>
                      </tr>
                  @endforeach
                </tbody>

              </table>
          </div>
        </div>
      </div>
  </main>

@endsection
