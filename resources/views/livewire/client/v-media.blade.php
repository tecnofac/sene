<div class="bg-white" id="Actus" x-data="{modal:false, url:'', id:''}">
    <div class="container">
        
        <div class="py-5 row act " id="">
            @foreach ($actus as $act)   
            @if ($TYPE == $act->type)
                
            <div  class = "mb-5 frame col-lg-4 col-md-4 col-sm-6 text-decoration-none text-secondary" wire:click="selection({{$act->id}}, {{$act->url}})" @click="url='<?php echo $act['url']?>';id='<?php echo $act['id']?>';modal=true">
                <div class="shadow card-b w-100">
                    @if ($TYPE == "img")
                    <img src="{{ asset('storage/actus/'.$act->id.'.png') }}" class="w-100 rounded-3" alt="...">
                    @else    
                    <iframe class="card-img-top" height="500" src="https://www.youtube.com/embed/{{$act->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif
                    <div class = "justify-content-center details h-100 rounded-3 d-flex align-items-center">
                        <div>
                            <h1>{{$act->titre}}</h1>
                            <p class="" style="text-align:justify">
                                {{$act->descrip}}
                                <b><span><i class="fas fa-plu"></i></span>Voir plus...</b>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif 
            @endforeach
            
        </div>
        <div class="container w-100 h-100 modal-media" style=" background-color:rgba(0, 0, 0, .5)" x-show="modal" x-transition.duration.500ms>
            <div class="flex-row-reverse py-2 d-flex">
                <button class="px-3 text-white btn bg-danger" @click="modal=false">
                    <i class="fa fa-close"></i>
                </button>
            </div>
            @if ($TYPE == "img")
            <img x-bind:src="'{{asset('storage/actus/')}}'+'/'+id+'.png'" class="w-100 rounded-3" alt="...">
            @else    
            <iframe class="card-img-top w-100 h-100" x-bind:src="'https://www.youtube.com/embed/'+url" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif
        </div>
    </div>

</div>
