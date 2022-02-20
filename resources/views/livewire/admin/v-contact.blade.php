<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="row">
        <div class="col-lg-4 border-end border-secondary-opacity-2">
            <div>
                <div>
                        <div class="mb-3">
                            <label for="numero" class="form-label">Numero</label>
                            <input type="contact" class="form-control" id="numero" aria-describedby="textHelp">
                            <div class="form-text" id="textHelp">Veillez bien saisir votre numero ici</div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="textHelp">
                            <div class="form-text" id="textHelp">Veillez bien saisir votre email</div>
                        </div>
                        <div class="mb-3">
                            <label for="adresse" class="form-label">Adresse</label>
                            <input type="text" class="form-control" id="adresse" aria-describedby="textHelp">
                            <div class="form-text" id="textHelp">Veillez bien saisir votre adresse</div>
                        </div>
                        <div class="mb-3">
                            <label for="contenu" class="form-label">Contenu</label>
                            <textarea  id="contenu" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 border-end border-secondary-opacity-2">
            <div>
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
        </div>
        <div class="col-lg-4">
            <div class="caard">
                <div class="card-body ">
                    <div>
                        <span>Numero</span>
                        <p>08900000000</p>
                    </div>
                    <div>
                        <span>Email</span>
                        <p>Glodinsaudi@gmail.com</p>
                    </div>
                    <div>
                        <span>Adresse</span>
                        <p>Q/Noki 10ème Rue n°45</p>
                    </div>
                    <img src="{{asset('img/logo.jpg')}}" alt="img" class="card-img-top border-bottom border-secondary-opacity-2 w-50">
                    <p class="card-text">Lorem aliquid inventore dolorem excepturi quasi nulla officiis oloribus</p>
                </div>
            </div>
        </div>
    </div>
</div>
