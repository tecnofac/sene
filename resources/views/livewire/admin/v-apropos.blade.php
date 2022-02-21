<div class="container">
    {{-- Stop trying to control. --}}
    <div class="row">
        <div class="col-lg-4 border-end border-secondary-opacity-2">
            <div>
                <div class="mb-3">
                    <label for="titre" class="form-label" >TItre</label>
                    <input type="text" class="form-control" id="titre" aria-describedby="textHelp" wire:model="titre">
                    <div class="form-text" id="textHelp">Veillez bien saisir votre titre</div>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea  id="description" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="mb-3">
                    <label for="selectioniv" class="form-label">Selection image</label>
                    <input type="file" class="form-control" id="selectioniv" aria-describedby="textHelp" >
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
        <div class="col-lg-8 p-0">
            <div class="row ms-5 mt-5">
                @foreach ($apropos as $act)
                    <div class="card ms-5 col-lg-4">
                        @if(Storage::exists("public/apropos/".$act->id.".png"))
                        <img src="{{asset('storage/apropos/'.$act->id.'.png')}}" alt="img" class="card-img-top border-bottom border-decondary-opacity-2 w-100">
                        @endif
                        <div class="card-body ">
                            <h5 class="card-title">Titre</h5>
                            <p class="card-text">{{$act->titre}}</p>
                            <a href="#">{{$act->description}}</a>
                        </div>

                </div>  
                
                @endforeach   
                </div>
        </div>
    </div>
</div>
