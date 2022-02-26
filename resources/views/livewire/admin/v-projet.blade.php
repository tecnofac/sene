<div class="container pt-2 row">
    <x-notification />
    {{-- The whole world belongs to you. --}}
    <div class="col-lg-4 border-end border-secondary-opacity-2">
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" aria-describedby="textHelp" wire:model="titre">
            <div class="form-text" id="textHelp">Veillez bien saisir votre titre</div>
        </div>
        <div class="mb-3">
            <label for="sous-titre" class="form-label">Sous-titre</label>
            <input type="text" class="form-control" id="sous-titre" aria-describedby="textHelp" wire:model="sousTitre">
            <div class="form-text" id="textHelp">Veillez bien saisir le sous-titre</div>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea  id="description" cols="30" rows="3" class="form-control" wire:model="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="parcourir" class="form-label">Parcourir</label>
            <input type="file" class="form-control" id="parcourir" aria-describedby="textHelp" wire:model="photo">
            <div class="form-text" id="textHelp">Veillez rechercher l'image ou la video voulu</div>
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
    <div class="col-lg-8">
        <div class="mt-5 row">
            @foreach($projets as $pro)
            <div class="card col-lg-4" wire:click="selection({{$pro}})">
                <div class="card-body ">
                    <h5 class="card-title text-decoration-underline">{{$pro->titre}}</h5>
                    <h6 class="card-text text-decoration-underline">{{$pro->sousTitre}}</h6>
                    @if(Storage::exists("public/projets/".$pro->id.".png"))
                    <img src="{{asset('storage/projets/'.$pro->id.'.png')}}?{{rand()}}" alt="img" class=" border-bottom border-decondary-opacity-2 w-100">
                    @endif
                    <p class="card-text">{{$pro->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>




