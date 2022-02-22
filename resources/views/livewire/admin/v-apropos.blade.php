<div class="container-fluid">
    {{-- Stop trying to control. --}}
    <div class="row">
        <div class="col-lg-3 border-end border-secondary-opacity-2">
            <div>
                <div class="mb-3">
                    <label for="titre" class="form-label" >TItre</label>
                    <input type="text" class="form-control" id="titre" aria-describedby="textHelp" wire:model="titre">
                    <div class="form-text" id="textHelp">Veillez bien saisir votre titre</div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea  id="description" cols="30" rows="3" class="form-control" wire:model="description"></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="selectioniv" class="form-label">Selection image/video</label>
                    <input type="file" class="form-control" id="selectioniv" aria-describedby="textHelp" wire:model="photo">
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
        </div>
        <div class="col-lg-9">
            <div class="mt-5 row">
                @foreach ($apropos as $aprop)
                <div class="col-lg-4">
                    <div class="card" wire:click="selection({{$aprop}})">
                        @if(Storage::exists("public/apropos/".$aprop->id.".png"))
                        <img src="{{asset('storage/apropos/'.$aprop->id.'.png')}}?{{rand()}}" alt="img" class="card-img-top border-bottom border-decondary-opacity-2 w-100">
                        @endif
                        <div class="card-body ">
                            <h5 class="card-title">{{$aprop->titre}}</h5>
                            <p class="card-text">{{$aprop->description}}</p>
                        </div>
                    </div>  
                </div>
                
                @endforeach   
                </div>
        </div>
    </div>
</div>
