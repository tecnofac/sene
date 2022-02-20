<div class="p-5">
    @if($errors->any())
        @foreach($errors->all() as $errr)
            <p>{{$errr}}</p>
        @endforeach
    @endif
    <button class="btn bg-primary p-2" wire:click="create" type="button">Click create</button>
    <div class="">
        @foreach($apropos as $ac)
            <p>{{$ac->titre}}- {{$ac->description}}</p>
        @endforeach
        
    </div>
    <button class="btn bg-primary p-2" wire:click="update" type="button">Click update</button>
    <button class="btn bg-primary p-2" wire:click="delete" type="button">Click delete</button>
</div>
