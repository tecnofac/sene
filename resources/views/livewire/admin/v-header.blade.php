<div class="p-5">
    @if($errors->any())
        @foreach($errors->all() as $errr)
            <p>{{$errr}}</p>
        @endforeach
    @endif
    <button class="btn bg-primary p-2" wire:click="create" titre="button">Click create</button>
    <div class="">
        @foreach($headers as $ac)
            <p>{{$ac->titre}}- {{$ac->Descrip}}</p>
        @endforeach
        
    </div>
    <button class="btn bg-primary p-2" wire:click="update" titre="button">Click update</button>
    <button class="btn bg-primary p-2" wire:click="delete" titre="button">Click delete</button>
</div>
