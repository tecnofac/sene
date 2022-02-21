<div class="row container pt-2">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="col-lg-4 border-end border-secondary-opacity-2 p-2">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" aria-describedby="textHelp" wire:model="nom">
            <div class="form-text" id="textHelp">Veillez bien saisir le Nom</div>
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">Liens</label>
            <input type="url" class="form-control" id="url" aria-describedby="textHelp" wire:model="url">
            <div class="form-text" id="textHelp">Veillez bien saisir vos liens ici</div>
        </div>
        <div class="ps-2">
            <div class="m-3 ps-4">
                <button class="btn btn-primary btn-lg" type="button" wire:click="create">Enregistrer</button>
                <button class="btn btn-secondary btn-lg" type="button" wire:click="update">Modifier</button>
            </div>
            <div class="m-3 ps-4">
                <button class="btn btn-danger btn-lg" type="button" wire:click="delete">Supprimer</button>
                <button class="btn btn-dark btn-lg" type="button"  wire:click="clear">Nouveau</button>
            </div>                                                          
        </div>
    </div>
    <div class="col-lg-8">
        <div class="row">
            @foreach ($lienss as $lien)
            <div class="col-lg-4" wire:click="selection({{$lien}})">
                <div class="border-end border-bottom border-secondary-opacity-2 py-3 text-secondary">
                    <h5>{{$lien->nom}}</h5>
                    <a href="#">{{$lien->url}}</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

