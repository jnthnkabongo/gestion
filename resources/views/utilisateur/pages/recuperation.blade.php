<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mambote.Shop</title>
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-10 col-md-10 d-flex flex-column align-items-center justify-content-center">
                <div class="d-flex justify-content-center py-4">
                </div>
                <div class="card mb-3">
                  <div class="card-body">
                    <div class="">
                      <h5 class="card-title text-center pb-0 fs-4">Récuperation du compte de l'utilisateur</h5>
                    </div>
                    <form class="row g-3 needs-validation" novalidate method="POST" action="{{route('verification_complete')}}">
                        @csrf
                      <div class="col-6">
                        <label for="yourUsername" class="form-label">Nom</label>
                        <div class="input-group has-validation">
                          <input type="text" name="nom" class="form-control" id="nom" placeholder="Kabamba" required>
                        </div>
                      </div>
                      <div class="col-6">
                        <label for="yourUsername" class="form-label">Pseudo</label>
                        <div class="input-group has-validation">
                          <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Super Dealer" required>
                        </div>
                      </div>
                      <div class="col-6">
                        <label for="yourUsername" class="form-label">Numéro</label>
                        <div class="input-group has-validation">
                          <input type="number" name="numero" class="form-control" id="numero" placeholder="+243974133780" required>
                        </div>
                      </div>

                      <div class="col-6">
                        <label for="yourUsername" class="form-label">Question de sécurité </label>
                        <div class="row mb-3">

                            <div class="col-sm-12">
                              <select class="form-select" aria-label="Default select example">
                                <option selected>Quel est le nom de votre premier animal de compagni ?</option>
                                <option value="1">Quel est le nom de votre film préféré ?</option>
                                <option value="2">Quel est le nom de votre meilleur ami d'enfance ?</option>
                                <option value="3">Quel est le nom de votre ville favorite ?</option>
                              </select>
                            </div>
                          </div>
                      </div>
                      <div class="col-6">
                        <label for="yourUsername" class="form-label">Votre réponse</label>
                        <div class="input-group has-validation">
                          <input type="text" name="securite" class="form-control" id="securite" placeholder="Votre réponse" required>
                        </div>
                      </div>
                      <div class="col-12">
                        <a href="" class="btn btn-primary w-100">Envoyer</a>
                        <button type="submit" class="btn btn-primary w-100">Envoyers</button>
                      </div>
                      <div class="col-12">

                      </div>
                    </form>
                  </div>
                </div>

                <div class="credits">
                  Designer par Bestech Consult <a href="{{route('home_e-commerce')}}"> << Annuler</a>
                </div>

              </div>
            </div>
          </div>
        </section>
    </div>
</body>

<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/chart.js/chart.min.js')}}"></script>
<script src="{{asset('assets/vendor/echarts/echarts.min.js')}}"></script>
<script src="{{asset('assets/vendor/quill/quill.min.js')}}"></script>
<script src="{{asset('assets/vendor/simple-datatables/simple-datatables.js')}}"></script>
<script src="{{asset('assets/vendor/tinymce/tinymce.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>



