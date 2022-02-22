<div>
    <div class="row">
        <div class="px-5 py-5 col-8">
            <div class="shadow card w-100" style="width: 18rem;">
                @if ($oneA->type == "img")
                <img src="{{ asset('storage/actus/'.$oneA->id.'.png') }}" class="card-img-top" alt="...">
                @else    
                <iframe class="card-img-top" height="500" src="https://www.youtube.com/embed/{{$oneA->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @endif
                {{-- <div class="card-img-overlay">
                    <h5 class="px-1 py-2 text-white card-title" style="background-color: rgba(0, 0, 0, 0.753)">{{$oneA->titre}}</h5>
                </div> --}}
                <ul class="list-group list-group-flush">
                    <li class="list-group-item h3"><b>{{$oneA->titre}}</b></li>
                </ul>
                <div class="card-body">
                    <p class="card-text">
                        {{ $oneA->descrip }}
                    </p>
                </div>
            </div>
        </div>
        <div class="py-5 col-4">
            {{-- Actualites --}}
            <h3>Dernières Actualités</h3>
            @foreach ($actus as $act)    
                @if ($oneA->id != $act->id)    
                <a class="row text-decoration-none text-secondary" href="{{route('dact', $act->id)}}" >
                    <div class="col-3">
                        <img src="{{ asset('storage/actus/'.$act->id.'.png') }}" alt="" class="w-100">
                    </div>
                    <div class="col-9">
                        <h4>{{$act->titre}}</h4>
                        <p style="text-align:justify " class="d-inline-block text-truncate w-100">
                            {{$act->descrip}}
                        </p>
                    </div>
                </a>
                @endif
            @endforeach
            <hr>
            {{-- Liens --}}
            <h3>Liens Utiles</h3>
            @foreach ($urls as $lien)    
            <a class="row text-decoration-none text-secondary" href="{{$lien->url}}" >
                <div class="col-10">
                    <i class="fa fa-chevron-right"></i>
                    {{ $lien->nom }}
                </div>
                {{-- <div class="col-2 text-end">
                    <i class="fa fa-chevron-right"></i>
                </div> --}}
            </a>
            @endforeach
        </div>
    </div>
</div>
