<div class="container pt-3">
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="row">
        <div class="col-lg-4 border-end border-secondary-opacity-2">
                <div class="mb-3">
                    <label for="titre" class="form-label">TItre</label>
                    <input type="text" class="form-control" id="titre" aria-describedby="textHelp" wire:model="titre">
                    <div class="form-text" id="textHelp">Veillez bien saisir votre titre</div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea  id="description" cols="30" rows="3" class="form-control" wire:model="Descrip"></textarea>
                </div>
            
        </div>
        <div class="col-lg-4 border-end border-secondary-opacity-2">
            <div class="mb-3">
                <label for="selectionimage" class="form-label">Selection image</label>
                <input type="file" class="form-control" id="selectionimage" aria-describedby="textHelp" wire:model="photo">
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
        
        @foreach($headers as $head)
        <div class="col-lg-4"  wire:click="selection({{$head}})">
            <div class="card ">
                <h5 class="card-title bg-light text-decoration-underline">{{$head->titre}}</h5>
                <div class="card-body " >
                    @if(Storage::exists("public/headers/".$head->id.".png"))
                    <img src="{{asset('storage/headers/'.$head->id.'.png')}}"  alt="img" class="card-img-top border-bottom border-decondary-opacity-2 w-100">
                    @endif
                    <p class="card-text">{{$head->Descrip}}</p>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>

</div>

