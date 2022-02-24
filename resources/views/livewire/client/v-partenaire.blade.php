<div class="container" id="Partenaires">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="py-5 bg-light">
        <div class="">
            <h2 class="pt-5 text-start text-secondary "><b class=" border-bottom"><b class="p-2 text-white bg-warning "><b class="px-1">P</b></b>artenaires</b></h2>
            <div class="py-5 row act " id="">
                @foreach ($partenaires as $pt)    
                <a href="{{$pt->url}}" class = "mb-5 col-lg-2 col-md-2 col-sm-3 text-decoration-none text-secondary col-6">
                    <div class=" w-100">
                        <img src = "{{ asset('storage/partenaires/'.$pt->id.'.png') }}" class="w-100 rounded-3">
                        
                    </div>
                </a>
                @endforeach
                
            </div>
        </div>

    </div>
</div>
