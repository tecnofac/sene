<div class="container-fluid">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="row">
        <div class="col-lg-4 border-end border-secondary-opacity-2">
            <div>
                <div class="mb-3">
                    <label for="titre" class="form-label">TItre</label>
                    <input type="text" class="form-control" id="titre" aria-describedby="textHelp" wire:model="titre">
                    <div class="form-text" id="textHelp">Veillez bien saisir votre titre</div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea  id="description" cols="30" rows="3" class="form-control" wire:model="descrip"></textarea>
                </div>
                <div class="mb-3">
                    <label for="url" class="form-label">Liens</label>
                    <input type="url" class="form-control" id="url" aria-describedby="textHelp" wire:model="url">
                    <div class="form-text" id="textHelp">Veillez bien saisir vos liens ici</div>
                </div>
                <div class="mb-3">
                    <div class="mb-3 input-group">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        <select class="form-select" id="inputGroupSelect01" wire:model="type">
                          <option selected>Choisir un type</option>
                          <option value="img">Images</option>
                          <option value="vid">Video youtube</option>
                        </select>
                      </div>
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
        </div>
        <div class="col-lg-8">
            <div class="mt-3 row">
                @foreach ($actus as $act)
                <div class="col-lg-4">
                    <div class="card" wire:click="selection({{$act}})">
                        @if(Storage::exists("public/actus/".$act->id.".png"))
                        <img src="{{asset('storage/actus/'.$act->id.'.png')}}?{{rand()}}" alt="img" class="card-img-top border-bottom border-secondary-opacity-2 w-100">
                        @endif
                        <div class="card-body ">
                            <h5 class="card-title">{{$act->titre}}</h5>
                            <p class="card-text">{{$act->descrip}}</p>
                            <a href="{{$act->url}}">{{$act->url}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
            
            
        </div>
    </div>
</div>
