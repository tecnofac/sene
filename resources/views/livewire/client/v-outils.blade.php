<div>
    <div class="row">
        <div class="py-5 col-lg-8">
            <div class="shadow card w-100" style="width: 18rem;">
                <img src="{{ asset('storage/outils/'.$oneO->id.'.png') }}" class="card-img-top" alt="...">
                <div class="card-img-overlay">
                    <h5 class="px-1 py-2 text-white card-title" style="background-color: rgba(0, 0, 0, 0.753)">{{$oneO->titre}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item h3"><b>{{$oneO->sousTitre}}</b></li>
                </ul>
                <div class="card-body">
                    <p class="card-text">
                        {{ $oneO->description }}
                    </p>
                </div>
            </div>
        </div>
        <div class="py-5 col-lg-4">
            {{-- Actualites --}}
            <h3>Dernières Actualités</h3>
            @foreach ($actus as $act)  
            @if ($oneO->id != $act->id)      
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
