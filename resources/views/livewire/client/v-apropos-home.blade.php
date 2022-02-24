<div class="container">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="py-5 bg-light">
        <div class="">
            <h2 class="pt-5 text-start text-secondary "><b class=" border-bottom"><b class="p-2 text-white bg-warning "><b class="px-1">A</b></b>propos du SENAREC</b></h2>
            <div class="row">
                <div class="py-5 col-lg-12">
                    <div class="mb-3 card">
                        <div class="row g-0">
                            <div class="col-lg-4">
                                <img src="{{ asset('storage/apropos/'.$apropos[0]->id.'.png') }}" alt="" class="appr h-100 w-100" >
                            </div>
                            <div class="col-lg-8">
                                <div class="card-body">
                                    <h5>{{$apropos[1]->titre}}</h5>
                                    <p class="card-text" style="text-align:justify">
                                        {{$apropos[1]->description}}
                                    </p>
                                    <a class="card-text" href="{{ route('dap') }}"><small class="text-muted">Lire la suite</small></a>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <h5>{{$apropos[2]->titre}}</h5>
                                    <p class="card-text ">
                                        {{$apropos[2]->description}}
                                    </p>
                                    <a class="card-text" href="{{ route('dap') }}"><small class="text-muted">Lire la suite</small></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 appr ">
                    <img src="images/benjamin-bonge.jpg" alt="" class="appr" >
                </div> -->
            </div>
        </div>

    </div>
</div>
