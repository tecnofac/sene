<div class="container" id="Partenaires">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="py-5 bg-light">
        <div class="">
            <div class="py-5 row act " id="">
                @foreach ($partenaires as $pt)   
                @if ($pt->type == $typ)    
                <div class = "mb-5 col-lg-3 col-md-2 col-sm-3 text-decoration-none text-secondary col-6">
                    <div class="card" style="width: 18rem;">
                        <img src = "{{ asset('storage/partenaires/'.$pt->id.'.png') }}" class="card-img-top">
                        <div class="card-body">
                          <h5 class="card-title">{{$pt->nom}}</h5>
                          <p class="card-text">{{$pt->descrip}}</p>
                          <a href="{{$pt->url}}" class="">Visiter leur site</a>
                        </div>
                      </div>
                </div>
                @endif 
                @endforeach
                
            </div>
        </div>

    </div>
</div>
