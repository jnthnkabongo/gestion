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
                  <h5 class="card-title text-center pb-0 fs-4">S'enregistrer</h5>
                </div>
                <form class="row g-3 needs-validation" novalidate>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                      <input type="email" name="email" class="form-control" id="email" placeholder="superdealer@gmail.com" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Pseudo</label>
                    <div class="input-group has-validation">
                      <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Super Sealer" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Sexe</label>
                    <div class="input-group has-validation">
                      <select class="form-control" name="sexe" id="sexe">
                        <option value="">M</option>
                        <option value="">F</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Age</label>
                    <div class="input-group has-validation">
                      <input type="number" name="age" class="form-control" id="nom_complet" placeholder="18 ans" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Mot de passe </label>
                    <div class="input-group has-validation">
                      <input type="password" name="numero" class="form-control" id="numero" placeholder="@Fh142" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Photo profil</label>
                    <div class="input-group has-validation">
                      <input type="file" name="nom_article" class="form-control" id="profil" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Numéro téléphone</label>
                    <div class="input-group has-validation">
                      <input type="text" name="details" class="form-control" id="details" placeholder="+243 818486508" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Nom de l'article</label>
                    <div class="input-group has-validation">
                      <input type="text" name="nom_article" class="form-control" id="pseudo" placeholder="Range Rover Sport" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Détails de l'article</label>
                    <div class="input-group has-validation">
                      <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Super Sealer" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Prix</label>
                    <div class="input-group has-validation">
                      <input type="number" name="prix" class="form-control" id="prix" placeholder="Prix de l'article" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Date de fabrication</label>
                    <div class="input-group has-validation">
                      <input type="date" name="date" class="form-control" id="date" required>
                    </div>
                  </div>
                  <div class="col-6">
                    <label for="yourUsername" class="form-label">Photo de l'article</label>
                    <div class="input-group has-validation">
                      <input type="file" name="photos" class="form-control" id="photos"  required>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Emplacement</label>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" name="nom_article" class="form-control" id="pseudo" placeholder="Ville" required>
                        </div>
                        <div class="col-6">
                            <input type="text" name="nom_article" class="form-control" id="pseudo" placeholder="Commune" required>
                        </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <a href="" class="btn btn-primary w-100">S'enregister</a>
                  </div>
                  <div class="col-12">
                    <p class="small mb-0"> <a href="{{route('login_users')}}"> Vous avez déjà un compte ?</a></p>
                  </div>
                </form>
              </div>
            </div>

            <div class="credits">
              Designer par Bestech Consult <a href="{{route('home_e-commerce')}}"> << Retour</a>
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



