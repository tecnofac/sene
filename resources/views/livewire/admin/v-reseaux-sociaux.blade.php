<div class="pt-2 container-fluid row">
    <x-notification />
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="col-lg-3 border-end border-secondary-opacity-2">
        <div class="mb-3">
            <label for="nomreseaux" class="form-label">Nom du réseau</label>
            <input type="text" class="form-control" id="nomreseau" aria-describedby="textHelp " wire:model="nom">
            <div class="form-text" id="textHelp">Veillez bien saisir le nom du réseau</div>
        </div>
        <div class="mb-3">
            <label for="nomutilisateur" class="form-label">Nom d'utilisateur</label>
            <input type="text" class="form-control" id="nomutilisateur" aria-describedby="textHelp" wire:model="utilisateur">
            <div class="form-text" id="textHelp">Veillez bien saisir votre nom d'utilisateur</div>
        </div>
        <div class="mb-3">
            <label for="lien" class="form-label">Lien</label>
            <input type="text" class="form-control" id="lien" aria-describedby="textHelp" wire:model="url">
            <div class="form-text" id="textHelp">Veillez bien saisir le lien du réseau</div>
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" class="form-control" id="icon" aria-describedby="textHelp" wire:model="icon">
            <div class="form-text" id="textHelp">Veillez rechercher l'image voulu<</div>
        </div>
        <div class="mb-3 ms-4">
            <img src="{{asset('img/logo.jpg')}}" alt="img" class="border border-decondary-opacity-2 ms-5 w-50">
        </div>
        <div class="m-3 ps-4">
            <button class="btn btn-primary btn-lg" type="button" wire:click="create">Enregistrer</button>
            <button class="btn btn-secondary btn-lg" type="button" wire:click="update">Modifier</button>
        </div>
        <div class="m-3 ps-4">
            <button class="btn btn-danger btn-lg" type="button" wire:click="delete">Supprimer</button>
            <button class="btn btn-dark btn-lg" type="button" wire:click="clear">Nouveau</button>
        </div>
    </div>
    

    <div class=" col-lg-9">
        
        <div class="pt-3 row w-100">
           @foreach ($reseauxx as $res)
            <div class="mb-3 col-lg-4"  wire:click="selection({{$res}})">
                <div class="border rounded row border-secondary-opacity-2 w-100">
                    <div class="col-lg-3">
                        <i class="fab fa-{{$res->icon}} display-3 text-primary"></i>
                    </div>
                    <div class="pt-3 col-lg-9">
                        <h6>{{$res->nom}}</h6>
                        <a href="#">{{$res->url}}</a>
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
        </div>
        
    </div>
</div>
