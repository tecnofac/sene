<nav class="navbar navbar-light navbar-expand-lg bg-light border-bottom border-1 border-secondary p-0">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="text-decoration-none text-secondary">
                {{ __('Dashboard') }}
            </x-jet-nav-link>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav justify-content-end        w-100">
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" id="Me" data-bs-toggle="dropdown" aria-expanded="false">
                        MENU
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="Me">
                        <li><a href="#" class="dropdown-ietm text-decoration-none text-secondary">connexion</a></li>
                        <li><a href="#" class="dropdown-ietm text-decoration-none text-secondary">deconnexion</a></li>
                        <li><a href="#" class="dropdown-ietm text-decoration-none text-secondary">sauvegarder</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>