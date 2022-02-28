<div class="container" id="Partenaires">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="py-5 bg-light">
        <div class="">
            <div class="py-5 row act " id="">
                @foreach ($partenaires as $pt)   
                @if ($pt->type == $typ)    
                <div class = "mb-5 text-decoration-none text-secondary col-lg-3">
                    <div class="card w-100" style="width: 18rem;">
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
