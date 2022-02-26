<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    
    <div class="container py-5">
      <x-notification />
        <div class="row g-3">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
              {{$error}}
            @endforeach
            @endif
            <div class="col-md-6">
              <label for="inputnom4" class="form-label">Nom</label>
              <input type="text" class="form-control" id="inputnom4" aria-describedby="texthelp" wire:model="nom">
              <div class="form-text" id="textHelp">Veillez bien saisir votre nom</div>
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" class="form-control" id="inputEmail4" aria-describedby="texthelp" wire:model="email">
              <div class="form-text" id="textHelp">Veillez bien saisir votre email</div>
            </div>
            <div class="col-md-12">
              <label for="inputsujet" class="form-label">Sujet</label>
              <input type="text" class="form-control" id="inputsujet" aria-describedby="texthelp" wire:model="sujet">
              <div class="form-text" id="textHelp">Veillez bien saisir votre sujet</div>
            </div>
            <div class="col-md-12">
              <label for="inputcontenu" class="form-label">Contenu du message</label>
               <textarea name="" id="inputcontenu" cols="30" rows="10"  class="w-100" wire:model="contenu"></textarea>
            </div>
            <div class="offset-md-11 col-md-1">
              <button type="button" class="col-md-12 btn btn-primary" wire:click="create">Envoyer</button>
            </div>
        </div>
    </div>
</div>
