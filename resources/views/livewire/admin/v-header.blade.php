<div class="container pt-3">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-lg-4 border-end border-secondary-opacity-2">
                <div class="mb-3">
                    <label for="titre" class="form-label">TItre</label>
                    <input type="text" class="form-control" id="titre" aria-describedby="textHelp">
                    <div class="form-text" id="textHelp">Veillez bien saisir votre titre</div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea  id="description" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">Liens</label>
                    <input type="url" class="form-control" id="url" aria-describedby="textHelp">
                    <div class="form-text" id="textHelp">Veillez bien saisir vos liens ici</div>
                </div>
        </div>
        <div class="col-lg-4 border-end border-secondary-opacity-2">
            <div class="mb-3">
                <label for="selectionimage" class="form-label">Selection image</label>
                <input type="file" class="form-control" id="selectionimage" aria-describedby="textHelp">
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
        <div class="col-lg-4">
            <div class="card ">
                <h5 class="card-title bg-light text-decoration-underline">Titre</h5>
                <div class="card-body ">
                    <img src="{{asset('img/logo.jpg')}}" alt="img" class="card-img-top border-bottom border-decondary-opacity-2 w-100">
                    <p class="card-text">Lorem aliquid inventore dolorem excepturi quasi nulla officiis oloribus</p>
                    <a href="#">Lien</a>
                </div>
            </div>
        </div>
    </div>

</div>
