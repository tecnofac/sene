<div class="container pt-2 row">
    <x-notification />
    {{-- The Master doesn't talk, he acts. --}}
    <div class="col-lg-4 border-end border-secondary-opacity-2">
        <div class="mb-3">
            <label for="titre" class="form-label">Titre</label>
            <input type="text" class="form-control" id="titre" aria-describedby="textHelp" wire:model="titre">
            <div class="form-text" id="textHelp">Veillez bien saisir votre titre</div>   
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea  id="description" cols="30" rows="3" class="form-control" wire:model="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="contact" class="form-label">Contact</label>
            <input type="text" class="form-control" id="contact" aria-describedby="textHelp" wire:model="contacts">
            <div class="form-text" id="textHelp">Veillez bien saisir votre numero ou email</div>
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
        <div class="row">
            @foreach($offres as $off)
            <div class="col-lg-4" wire:click="selection({{$off}})">
                <div class="card ">
                    <div class="card-body ">
                    <h5 class="card-title text-decoration-underline">{{$off->titre}}</h5>
                        <p class="card-text">{{$off->description}}</p>
                        <a href="#">{{$off->contacts}} <br> Glodinsaudi@gmail.com</a>
                    </div>
                </div>
            </div>
            @endforeach            
        </div>
    </div>
</div>
