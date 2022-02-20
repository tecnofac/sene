<div class="p-5">
    @if($errors->any())
        @foreach($errors->all() as $errr)
            <p>{{$errr}}</p>
        @endforeach
    @endif
    <button class="btn bg-primary p-2" wire:click="create" url="button">Click create</button>
    <div class="">
        @foreach($outil as $ac)
            <p>{{$ac->titre}}- {{$ac->description}}</p>
        @endforeach
        
    </div>
    <button class="btn bg-primary p-2" wire:click="update" url="button">Click update</button>
    <button class="btn bg-primary p-2" wire:click="delete" url="button">Click delete</button>
</div>


