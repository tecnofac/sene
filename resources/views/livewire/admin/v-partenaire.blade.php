
    <div class="container">
        {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
        <div class="row">
            <div class="col-lg-4 border-end border-secondary-opacity-2">
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="nom" aria-describedby="textHelp">
                        <div class="form-text" id="textHelp">Veillez bien saisir votre titre</div>
                    </div>
                    <div class="mb-3">
                        <label for="url" class="form-label">Liens</label>
                        <input type="url" class="form-control" id="url" aria-describedby="textHelp">
                        <div class="form-text" id="textHelp">Veillez bien saisir vos liens ici</div>
                    </div>
                    <div class="mb-3">
                        <label for="parcourir" class="form-label">Parcourir</label>
                        <input type="file" class="form-control" id="parcourir" aria-describedby="textHelp">
                        <div class="form-text" id="textHelp">Veillez rechercher l'image ou la video voulu</div>
                    </div>
                    <div class="mb-3 ms-4">
                        <img src="{{asset('img/logo.jpg')}}" alt="img" class="border border-decondary-opacity-2 ms-5 w-50">
                    </div>
                    <div class="m-3 ps-4">
                        <button class="btn btn-primary btn-lg" type="button">Enregistrer</button>
                        <button class="btn btn-secondary btn-lg" type="button">Modifier</button>
                    </div>
                    <div class="m-3 ps-4">
                        <button class="btn btn-danger btn-lg" type="button">Supprimer</button>
                        <button class="btn btn-dark btn-lg" type="button">Nouveau</button>
                    </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card ">
                            <h5 class="card-title border-bottom border-secondary-opacity-2">Nom</h5>
                            <div class="card-body ">
                                <img src="{{asset('img/logo.jpg')}}" alt="img" class="card-img-top border-bottom border-decondary-opacity-2 w-100">
                                <a href="#">Lien</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card ">
                            <h5 class="card-title border-bottom border-secondary-opacity-2">Nom</h5>
                            <div class="card-body ">
                                <img src="{{asset('img/logo.jpg')}}" alt="img" class="card-img-top border-bottom border-decondary-opacity-2 w-100">
                                <a href="#">Lien</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card ">
                            <h5 class="card-title border-bottom border-secondary-opacity-2">Nom</h5>
                            <div class="card-body ">
                                <img src="{{asset('img/logo.jpg')}}" alt="img" class="card-img-top border-bottom border-decondary-opacity-2 w-100">
                                <a href="#">Lien</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card ">
                            <h5 class="card-title border-bottom border-secondary-opacity-2">Nom</h5>
                            <div class="card-body ">
                                <img src="{{asset('img/logo.jpg')}}" alt="img" class="card-img-top border-bottom border-decondary-opacity-2 w-100">
                                <a href="#">Lien</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
    

