@extends('utilisateur.layouts.entete')
@section('content')

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
        <p class="col-lg-10 fs-4">Below is an example form bu can be triggered by attempting to submit the form without completing it.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-6">
        <form class="p-2 p-md-3 border rounded-3 bg-light" method="POST" action="{{route('poster-article')}}" enctype="multipart/form-data">
            @csrf
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="article_nom" id="article_nom" placeholder="Nom de l'article">
            <label for="floatingInput">Nom de l'article</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" name="article_detail" id="article_deails" placeholder="Détails de l'article">
            <label for="floatingInput">Détails de l'article</label>
          </div>
          <div class="form-floating mb-3">
            <input type="number" class="form-control" name="prix" id="prix" placeholder="Prix">
            <label for="floatingInput">Prix de l'article</label>
          </div>
          <div class=" mb-3">
            <input type="date" name="date_fabrication" id="date_fabrication" class="form-control" >
          </div>
          <div class="mb-3">
            <input type="text" name="ville" id="ville" placeholder="Ville" class="form-control">
          </div>
          <div class="mb-3">
            <input type="file" class="form-control" name="image" id="image">
          </div>
          <hr class="my-2">
          <small class="text-muted">Avant de poster assurez-vous d'avoir lu les règles des confidentialités</small>
          <div class="py-2">
            <button class="w-100 btn btn-lg btn-primary" type="submit">Poster un article</button>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection
