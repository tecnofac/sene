<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="row">
        <div class="col-lg-4 border-end border-secondary-opacity-2">
                <div class="pt-3">
                        <div class="mb-3">
                            <select id="type" wire:model="type">
                                <option value="">Tel</option>
                                <option value="">Email</option>
                                <option value="">Adresse</option>
                            </select>
                        </div>    
                        <div class="mb-3">
                            <label for="contenu" class="form-label">icon</label>
                            <input type="text" class="form-control" wire:model="icon">
                            <label for="contenu" class="form-label">Contenu</label>
                            <textarea  id="contenu" cols="30" rows="3" class="form-control" wire:model="contenu"></textarea>
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
            <div class="row ms-1 pt-3">
                @foreach($Contacts as $cont)
                <div class="col-lg-5 ms-2 border border-secondary-opacity-2 rounded p-3 ")>
                    <div class="row">
                        <div class="col-lg-2">
                            <i class="fa fa-envelope text-primary h3 "></i>
                        </div>
                        <div class="col-lg-6 ">
                            <a href="#">{{$cont->contenu}}</a>
                        </div>
                        <div>
                            <h4>{{$cont->icon}}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
