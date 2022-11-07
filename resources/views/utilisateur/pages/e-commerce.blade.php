@extends('utilisateur.layouts.entete2')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-12 col-md-12 col-sm-12">
                <div class="album py-5 bg-light">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3">
                            @foreach ( $article as $articles)
                            <div class="col">
                                <div class="card shadow-sm">
                                    <img src="../../../../image/{{$articles->image}}"  height="225px" width="100%"  alt="">
                                    <div class="badge bg-secondary text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$articles->prix }} Fc</div>
                                    <div class="badge bg-primary text-white position-absolute" style="top: 0.5rem; left: 0.5rem"> <i class="bi bi-geo-alt"></i> {{$articles->ville }}</div>
                                    <div class="card-body">

                                        <b><p class="card-text">{{$articles->article_nom}}</p></b>
                                        <p class="card-text">{{$articles->article_detail}}</p>

                                        <div class="d-flex justify-content-between align-items-center" data-bs-toggle="tooltip" data-bs-placement="right" title="">
                                            <div class="btn-group">
                                                <form method="POST" action="">
                                                    <a class="btn btn-sm btn-outline-primary" href="https://api.whatsapp.com/send?phone={{$articles->prix}}&texte=bonjour"> <i class="bi bi-whatsapp"></i> </a>
                                                    <a class="btn btn-sm btn-outline-secondary" href="{{route('detail_user',$articles['id'])}}"> <i class="bi bi-eye"></i> </a>
                                                </form>
                                            </div>
                                            <small class="text-muted"></small>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center py-1">

                                        </div>
                                        <div class="modal fade" id="basicModal" tabindex="-1">
                                            <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <h5 class="modal-title">Basic Modal</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at
                                                et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum.
                                                Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa earum nesciunt deserunt, tempora distinctio natus id!
                                                    Architecto commodi accusantium libero corrupti sed, dolor necessitatibus aspernatur animi eos, dignissimos vel quis.
                                                </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light">
                                                <h5 class="modal-title">Modal Dialog Scrollable</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                </div>
                                                <div class="modal-footer bg-light">
                                                <div class="container-fluid">
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" name="" id="" cols="30" rows="2" placeholder="Message"></textarea>
                                                        </div>
                                                    <div class="col-md-3">
                                                            <button type="button" class="btn btn-secondary"><i class="ri-home-2-fill"></i></button>
                                                            <button type="button" class="btn btn-primary"><i class="ri-send-plane-fill"></i></button>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
                </div>
            </div>

        </div>
    </div>

@endsection
