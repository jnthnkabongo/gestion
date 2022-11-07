@extends('administration.layouts.entete2')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Liste des clients</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Liste des clients</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
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

                          <tr>
                              <th scope="row"></th>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td><span class="badge bg-success">Approved</span></td>
                          </tr>

                    </tbody>

                  </table>
              </div>
            </div>
          </div>
    </main>
@endsection
