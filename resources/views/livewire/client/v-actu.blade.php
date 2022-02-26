<div class="bg-white" id="Actus">
    <div class="container">
        <h2 class="pt-5 text-start text-secondary "><b class=" border-bottom"><b class="p-2 text-white bg-warning "><b class="px-1">A</b></b>ctualité</b></h2>
        <div class="py-5 row act " id="">
            @foreach ($actus as $act)    
            <a href="{{route('dact', $act->id)}}" class = "mb-5 frame col-lg-3 col-md-3 col-sm-6 text-decoration-none text-secondary">
                <div class="shadow card-b w-100">
                    <img src = "{{ asset('storage/actus/'.$act->id.'.png') }}?{{rand()}}" class="w-100 rounded-3">
                    <div class = "justify-content-center details h-100 rounded-3 d-flex align-items-center">
                        <div>
                            <h1>{{$act->titre}}</h1>
                            <p class="" style="text-align:justify">
                                {{-- {{$act->descrip}} --}}
                                <b><span><i class="fas fa-plu"></i></span>Voir plus...</b>
                            </p>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
            
        </div>
       
    </div>
</div>
