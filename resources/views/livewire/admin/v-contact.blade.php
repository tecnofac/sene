<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="row">
        @if ($errors->any())
        <div class="p-2 bg-red-300 ">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="col-lg-4 border-end border-secondary-opacity-2">
                <div class="pt-3">
                        <div class="mb-3">
                            <div class="mb-3 input-group">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select class="form-select" id="inputGroupSelect01" wire:model="type">
                                  <option selected>Choisir un type</option>
                                  <option value="tel">Tel</option>
                                  <option value="mail">Email</option>
                                  <option value="adresse">Adresse</option>
                                </select>
                            </div>
                        </div>    
                        <div class="mb-3">
                            <label for="contenu" class="form-label">icon</label>
                            <input type="text" class="form-control" wire:model="icon">
                            <label for="contenu" class="form-label">Contenu</label>
                            <input type="text" class="form-control" wire:model="contenu" id="contenu">
                            
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
            <div class="pt-3 row ms-1">
                @foreach($Contacts as $cont)
                <div class="p-3 border rounded col-lg-5 ms-2 border-secondary-opacity-2 " wire:click="selection({{$cont}})">
                    <div class="row">
                        <div class="col-lg-2">
                            <i class="fa fa-{{$cont->icon}} text-primary h3 "></i>
                        </div>
                        <div class="col-lg-6 ">
                            <a href="#" class="w-100">{{$cont->contenu}}</a>
                        </div>
                        
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
