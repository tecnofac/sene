<div class="{{-- fixed-top --}}">
    {{-- <nav class="px-2 navbar navbar-light navbar-expand-lg bg-info">
        <div class="container text-white nav justify-content-end">
            <div class="collapse navbar-collapse">
                <ul class="gap-5 navbar-nav w-100 nav justify-content-start ">
                    <li class=" nav-item">
                        <a href="#" class="nav-link active" aria-current="page"><b>SENAREC RDC</b></a>
                    </li>
                    <li class=" nav-item">
                        <a href="#" class="nav-link active" aria-current="page">Adresse: 5, Avenue Lubefu, GOMBE</a>
                    </li>
                    <li class=" nav-item">
                        <a href="#" class="nav-link active" aria-current="page">Appelez-nous (+243) +243(0) 991-068-948</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav> --}}
    <nav class="p-0 bg-white p navbar navbar-light navbar-expand-lg" >
        <div class="container">
            <a class="p-0 navbar-brand col-12 col-lg-3 d-flex align-items-center" href="{{ route('home') }}">
                <img src="{{ asset('img/logo.png') }}" alt="" srcset="" style="height:90px;">
                <div class="d-flex justify-content-center align-items-center" >
                    <p class="text-center flex-column d-flex">
                        <b class="fs-3" style="color:#009ce8">SENAREC</b> <br>
                        <span class="fs-6 fw-bold" style="">SECRETARIAT NATIONAL POUR </span>
                        <span class="fs-6" style="">LE RENFORCEMENT DES CAPACITES</span>
                    </p>
                    
                </div>
            </a>
            <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="navbarnavDropdown" aria-expanded="false" >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class=" navbar-nav w-100 nav justify-content-end h5">
                    <li class="px-2 nav-item">
                        <a href="{{ route('home') }}" class="nav-link active" aria-current="page">Acceuil</a>
                    </li>
                    <li class="px-2 nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="Md" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Outils
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="Md">
                            @foreach ($outils as $out)
                            <li><a href="{{ route('outil', $out->id) }}" class="dropdown-item h5"> {{$out->titre}}</a></li>
                            @endforeach
                            
                        </ul>
                    </li>
                    <li class="px-2 nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="appro" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Projets
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="appro">
                            @foreach ($projets as $prj)                                
                            <li><a href="{{ route('projet', $prj->id) }}" class="dropdown-item h5">{{$prj->titre}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="px-2 nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="par" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Partenaires
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="par">
                            <li><a href="{{ route('ty_part', 1) }}" class="dropdown-item h5">Partenaires Operationels</a></li>
                            <li><a href="{{ route('ty_part', 2) }}" class="dropdown-item h5">Partenaires strategiques</a></li>
                        </ul>
                    </li>
                    
                    <li class="px-2 nav-item">
                        <a href="{{route('home', '#Actus')}}" class="nav-link">Actualités</a>
                        
                    </li>
                    <li class="px-2 nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="offres" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mediatiques
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="offres">
                            <li><a href="{{ route('media', 'vid') }}" class="dropdown-item h5">Videos</a></li>
                            <li><a href="{{ route('media', 'img') }}" class="dropdown-item h5">Photos</a></li>
                        </ul>
                    </li>
                    <li class="px-2 nav-item">
                        <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                    </li>
                    {{-- <li class="nav-item ">
                        <a href="?" class="nav-link bg-info">Fr</a>
                    </li>
                    <li class="px-1 nav-item">
                        <a href="?lang=eng" class="text-black nav-link bg-warning">En</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</div>
   