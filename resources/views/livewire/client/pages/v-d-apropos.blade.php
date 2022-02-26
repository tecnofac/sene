<div class="">
    <div class="py-5 row">
        <div class="col-lg-8">
            <div class="row">
                
                <div class="col-lg-12">
                    <div class="p-5 card">
                        <img src="{{ asset('storage/apropos/'.$apropos[0]->id.'.png') }}" alt="" class="appr h-100 w-100" >
                        <div class="card-footer text-muted">
                            <h2>{{$apropos[0]->titre}} : {{$apropos[0]->description}}</h2>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($apropos as $apr)
            @if ($loop->index != 0)
                
            <div class="mt-5 row">
                    
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="px-1 py-2 text-dark bg-light">{{$apr->titre}}</h5>
                            <p class="card-text" style="text-align:justify">
                                {{$apr->description}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        <div class=" col-lg-4">
            {{-- Actualites --}}
            <h3>Dernières Actualités</h3>
            @foreach ($actus as $act)      
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
