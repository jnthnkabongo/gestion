@extends('administration.layouts.entete2')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Notifications</h1>
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Notifications</li>
              </ol>
            </nav>
          </div><!-- End Page Title -->
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Messagerie clientele</h5>
                <!-- Advanced Form Elements -->
                <form>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Utilisateur</label>
                    <div class="col-sm-10">
                      <div class="form-floating mb-3">
                        <select class="form-select" id="floatingSelect" aria-label="Selectionnnez les utilisateurs">
                          <option selected></option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <label for="floatingSelect">Selectionnnez les utilisateurs</label>
                      </div>

                    </div>
                    <label class="col-sm-2 col-form-label">Rédiger</label>
                      <div class="col-sm-10">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                            <label for="floatingTextarea">Messages</label>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                    <div class="col-md-4">
                        <button class="btn btn-primary w-50" type="submit">Envoyer</button>
                      </div>
                  </div>


                  <div class="col-md-4"></div>
                </form><!-- End General Form Elements -->
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="card" style="overflow-y :scroll; margin-bottom: 12px; height:300px">
                <div class="card-body" >
                  <h5 class="card-title">Dernier messages</h5>

                  <!-- List group with Advanced Contents -->
                  @foreach ($notification as $messages)
                  <div class="list-group mb-2" >

                    <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                      <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>{{$messages->created_at}}</small>
                      </div>

                      <p class="mb-1">{{$messages->messages}}</p>
                      <small>And some small print.</small>

                    </a>

                  </div><!-- End List group Advanced Content -->
                  @endforeach
                </div>
              </div>
          </div>
    </main>
@endsection
